<?php
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Not Provided';
$age = isset($_GET['age']) ? htmlspecialchars($_GET['age']) : 'Not Provided';
$gender = isset($_GET['gender']) ? htmlspecialchars($_GET['gender']) : 'Not Provided';
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : 'Not Provided';
$address = isset($_GET['address']) ? htmlspecialchars($_GET['address']) : 'Not Provided';
$password = isset($_GET['password']) ? htmlspecialchars($_GET['password']) : 'Not Provided';  // Password field
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata - Display</title>
</head>
<body>
    <center>
        <h1>Your Submitted Biodata</h1>

        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Age:</strong> <?php echo $age; ?></p>
        <p><strong>Gender:</strong> <?php echo $gender; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Address:</strong> <?php echo $address; ?></p>
        <p><strong>Password:</strong> <?php echo str_repeat('*', strlen($password)); ?></p> <!-- Mask the password -->

    </center>
</body>
</html>
