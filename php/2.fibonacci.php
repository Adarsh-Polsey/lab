<?php
function generateFibonacci($limit) {
    $fibonacci = [0, 1];
    while (($fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2]) <= $limit) {
        $fibonacci[] = $fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2];
    }
    return $fibonacci;
}

if(isset($_POST['limit'])) {
    $limit = $_POST['limit'];
    $series = generateFibonacci($limit);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series</title>
</head>
<body>
    <h2>Generate Fibonacci Series</h2>
    <form method="post">
        <input type="number" name="limit" required>
        <input type="submit" value="Generate">
    </form>
    <?php
    if(isset($series)) {
        echo "<p>Fibonacci series up to $limit: " . implode(", ", $series) . "</p>";
    }
    ?>
</body>
</html>
