<?php
if(isset($_POST['fruits'])) {
    $selected_fruits = $_POST['fruits'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fruit Selection</title>
</head>
<body>
    <h2>Select Fruits</h2>
    <form method="post">
        <select name="fruits[]" multiple size="6">
            <option value="Apple">Apple</option>
            <option value="Banana">Banana</option>
            <option value="Orange">Orange</option>
            <option value="Mango">Mango</option>
            <option value="Grapes">Grapes</option>
            <option value="Pineapple">Pineapple</option>
        </select>
        <br><br>
        <input type="submit" value="Show Selected Fruits">
    </form>

    <?php if(isset($selected_fruits)): ?>
        <h3>Selected Fruits:</h3>
        <ul>
        <?php foreach($selected_fruits as $fruit): ?>
            <li><?php echo $fruit; ?></li>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
