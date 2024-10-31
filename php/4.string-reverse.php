<?php
function reverseString($str) {
    return strrev($str);
}

if(isset($_POST['string'])) {
    $original = $_POST['string'];
    $reversed = reverseString($original);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>String Reverse</title>
</head>
<body>
    <h2>Reverse a String</h2>
    <form method="post">
        <input type="text" name="string" required>
        <input type="submit" value="Reverse">
    </form>
    <?php
    if(isset($reversed)) {
        echo "<p>Original string: $original</p>";
        echo "<p>Reversed string: $reversed</p>";
    }
    ?>
</body>
</html>
