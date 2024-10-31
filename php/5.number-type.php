<?php
function getNumberType($number) {
    $sum = 0;
    for($i = 1; $i < $number; $i++) {
        if($number % $i == 0) {
            $sum += $i;
        }
    }
    
    if($sum == $number) {
        return "Perfect";
    } elseif($sum > $number) {
        return "Abundant";
    } else {
        return "Deficient";
    }
}

if(isset($_POST['number'])) {
    $num = $_POST['number'];
    $type = getNumberType($num);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Number Type Checker</title>
</head>
<body>
    <h2>Check Number Type</h2>
    <form method="post">
        <input type="number" name="number" required>
        <input type="submit" value="Check">
    </form>
    <?php
    if(isset($type)) {
        echo "<p>Number $num is a $type number</p>";
    }
    ?>
</body>
</html>
