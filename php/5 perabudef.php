<!DOCTYPE html>
<html lang="en">
<head><center>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Classification</title>
</head>

<body>

<h2>Classify a Number as Perfect, Abundant, or Deficient</h2>


<form method="POST">
    <label for="number">Enter a number: </label>
    <input type="number" id="number" name="number" required>
    <input type="submit" value="Classify Number">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $number = $_POST['number'];

    
    function sumOfDivisors($num) {
        $sum = 0;
        for ($i = 1; $i <= $num / 2; $i++) {
            if ($num % $i == 0) {
                $sum += $i;
            }
        }
        return $sum;
    }

       function classifyNumber($num) {
        $sumDivisors = sumOfDivisors($num);

        if ($sumDivisors == $num) {
            return "Perfect";
        } elseif ($sumDivisors > $num) {
            return "Abundant";
        } else {
            return "Deficient";
        }
    }

    
    $classification = classifyNumber($number);
    echo "<h3>The number $number is $classification.</h3>";
}
?>
</center>
</body>
</html>
