<?php
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    $numDigits = strlen((string)$number);
    
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }
    
    return $sum === $number;
}

if(isset($_POST['number'])) {
    $num = $_POST['number'];
    $result = isArmstrong($num) ? "$num is an Armstrong number" : "$num is not an Armstrong number";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Armstrong Number Checker</title>
</head>
<body>
    <h2>Check Armstrong Number</h2>
    <form method="post">
        <input type="number" name="number" required>
        <input type="submit" value="Check">
    </form>
    <?php if(isset($result)) echo "<p>$result</p>"; ?>
</body>
</html>
