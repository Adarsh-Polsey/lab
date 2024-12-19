<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <title>String Reversal</title>
</head>
<center>
<body>
    <h1>Reverse a String</h1>
    <form method="post">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" name="inputString" required>
        <input type="submit" value="Reverse">
    </form>

    <?php
    function reverseString($str) {
        return strrev($str);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = htmlspecialchars($_POST['inputString']); 
        $reversedString = reverseString($inputString);

        echo "<h2>Reversed String:</h2>";
        echo "<p>$reversedString</p>";
    }
    ?>
</body>
</center>
</html>
