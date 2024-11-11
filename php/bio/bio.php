<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $gender = htmlspecialchars($_POST['gender']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $password = htmlspecialchars($_POST['password']); 

    header("Location: bio_display.php?name=$name&age=$age&gender=$gender&email=$email&address=$address&password=$password");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Form</title>
</head>
<body>
    <center>
        <h1>Biodata Form</h1>

        <form action="bio.php" method="POST">
            Name: <input type="text" name="name" required><br><br>
            Age: <input type="number" name="age" required><br><br>
            Gender:
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select><br><br>
            Email: <input type="email" name="email" required><br><br>
            Address: <textarea name="address" required></textarea><br><br>
            Password: <input type="password" name="password" required><br><br>
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
</html>
