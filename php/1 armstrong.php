<html>
<head>
    <title>Armstrong Number Checker</title>
</head>
<body>
<center>
<h2>Armstrong Number Or Not</h2>
<form action="" method="get">
    Enter the number:
    <input type="number" name="number">
    <br><br>
    <input type="submit" value="submit">
</form>

<?php
if (isset($_GET['number'])) {
    $number = $_GET['number'];
    $sum = 0;
    $x = $number;

    while ($x != 0) {
        $rem = $x % 10;
        $sum += ($rem * $rem * $rem);
        $x = (int)($x / 10);  
    }

    if ($number == $sum) {
        echo "$number is an Armstrong number.";
    } else {
        echo "$number is not an Armstrong number.";
    }
}
?>

</center>
</body>
</html>
