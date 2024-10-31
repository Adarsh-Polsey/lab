<?php
$conn = new mysqli("localhost", "username", "password", "database_name");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table if not exists
$sql = "CREATE TABLE IF NOT EXISTS product (
    itemcode VARCHAR(20) PRIMARY KEY,
    itemname VARCHAR(100) NOT NULL,
    unitprice DECIMAL(10,2) NOT NULL
)";
$conn->query($sql);

// Insert records if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemcode = $_POST['itemcode'];
    $itemname = $_POST['itemname'];
    $unitprice = $_POST['unitprice'];
    
    $sql = "INSERT INTO product VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssd", $itemcode, $itemname, $unitprice);
    $stmt->execute();
}

// Fetch all records
$result = $conn->query("SELECT * FROM product");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Management</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Add New Product</h2>
    <form method="post">
        <div>
            <label>Item Code:</label><br>
            <input type="text" name="itemcode" required>
        </div>
        <div>
            <label>Item Name:</label><br>
            <input type="text" name="itemname" required>
        </div>
        <div>
            <label>Unit Price:</label><br>
            <input type="number" step="0.01" name="unitprice" required>
        </div>
        <input type="submit" value="Add Product">
    </form>

    <h2>Product List</h2>
    <table>
        <tr>
            <th>Item Code</th>
            <th>Item Name</th>
            <th>Unit Price</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['itemcode']; ?></td>
            <td><?php echo $row['itemname']; ?></td>
            <td>₹<?php echo number_format($row['unitprice'], 2); ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
