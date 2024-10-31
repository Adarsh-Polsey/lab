<?php
$conn = new mysqli("localhost", "username", "password", "database_name");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table if not exists
$sql = "CREATE TABLE IF NOT EXISTS bank (
    accno VARCHAR(20) PRIMARY KEY,
    cust_name VARCHAR(100) NOT NULL,
    balance DECIMAL(10,2) NOT NULL
)";
$conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accno = $_POST['accno'];
    $amount = $_POST['amount'];
    $type = $_POST['type'];
    
    // Start transaction
    $conn->begin_transaction();
    
    try {
        // Get current balance
        $stmt = $conn->prepare("SELECT balance FROM bank WHERE accno = ?");
        $stmt->bind_param("s", $accno);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 0) {
            throw new Exception("Account not found!");
        }
        
        $current_balance = $result->fetch_assoc()['balance'];
        
        // Calculate new balance
        if ($type === 'withdrawal') {
            if ($current_balance < $amount) {
                throw new Exception("Insufficient funds!");
            }
            $new_balance = $current_balance - $amount;
        } else {
            $new_balance = $current_balance + $amount;
        }
        
        // Update balance
        $stmt = $conn->prepare("UPDATE bank SET balance = ? WHERE accno = ?");
        $stmt->bind_param("ds", $new_balance, $accno);
        $stmt->execute();
        
        $conn->commit();
        $message = "Transaction successful! New balance: ₹" . number_format($new_balance, 2);
    } catch (Exception $e) {
        $conn->rollback();
        $error = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bank Transaction</title>
</head>
<body>
    <h2>Bank Transaction</h2>
    <?php 
    if (isset($message)) echo "<p style='color: green'>$message</p>";
    if (isset($error)) echo "<p style='color: red'>$error</p>";
    ?>
    <form method="post">
        <div>
            <label>Account Number:</label><br>
            <input type="text" name="accno" required>
        </div>
        <div>
            <label>Amount:</label><br>
            <input type="number" step="0.01" name="amount" required>
        </div>
        <div>
            <label>Transaction Type:</label><br>
            <input type="radio" name="type" value="deposit" required> Deposit
            <input type="radio" name="type" value="withdrawal" required> Withdrawal
        </div>
        <input type="submit" value="Process Transaction">
    </form>
</body>
</html>
