<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series</title>
</head>
<body>
<center>
<h2>Fibonacci Series</h2>
<form method="POST">
    Enter the limit:
    <input type="number" name="limit" required>
    <br><br>
    <input type="submit" name="submit">
</form>

<?php
if ($_POST) {
    $limit = $_POST['limit']; 
    if ($limit <= 0) {
        echo "Please enter a positive limit.";
    } else {
        $a = 0;
        $b = 1;
        echo $a;
        for ($i = 1; $i < $limit; $i++) {
     
            echo ",".$b;
            $next = $a + $b;
            $a = $b;
            $b = $next;
        }
    }
}
?>
</center>
</body>
</html>
