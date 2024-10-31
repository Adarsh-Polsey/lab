<?php
$conn = new mysqli("localhost", "username", "password", "database_name");

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['roll_no'])) {
    $roll_no = $_POST['roll_no'];
    
    $sql = "SELECT * FROM student WHERE roll_no = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $roll_no);
    $stmt->execute();
    $result = $stmt->get_result();
    $student = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Mark List</title>
</head>
<body>
    <h2>Student Mark List</h2>
    <form method="post">
        <label>Enter Roll No:</label>
        <input type="text" name="roll_no" required>
        <input type="submit" value="Search">
    </form>
    
    <?php
    if(isset($student)) {
        if($student) {
            echo "<h3>Student Details</h3>";
            echo "<p>Roll No: " . $student['roll_no'] . "</p>";
            echo "<p>Name: " . $student['name'] . "</p>";
            echo "<p>Mark: " . $student['mark'] . "</p>";
            echo "<p>Grade: " . $student['grade'] . "</p>";
        } else {
            echo "<p>No student found with this roll number.</p>";
        }
    }
    ?>
</body>
</html>
