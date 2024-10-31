<?php
session_start();
$conn = new mysqli("localhost", "username", "password", "database_name");

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, md5($password));
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <?php if(isset($error)) echo "<p style='color: red'>$error</p>"; ?>
    <form method="post">
        <label>Username:</label><br>
        <input type="text" name="username" required><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required><br>
        
        <input type="submit" value="Login">
    </form>
</body>
</html>
