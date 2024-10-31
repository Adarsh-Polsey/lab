<?php
// Create array with 10 names
$names = [
    "John", "Jane", "Michael", "Emma", "William",
    "Olivia", "James", "Emma", "Alexander", "Sophia"
];

// a. Display using foreach
echo "<h3>a. Original Array (using foreach):</h3>";
echo "<ul>";
foreach($names as $name) {
    echo "<li>$name</li>";
}
echo "</ul>";

// b. Sorted array
sort($names);
echo "<h3>b. Sorted Array:</h3>";
echo "<ul>";
foreach($names as $name) {
    echo "<li>$name</li>";
}
echo "</ul>";

// c. Array without duplicates
$unique_names = array_unique($names);
echo "<h3>c. Array without Duplicates:</h3>";
echo "<ul>";
foreach($unique_names as $name) {
    echo "<li>$name</li>";
}
echo "</ul>";

// d. Remove last element
array_pop($names);
echo "<h3>d. Array after Removing Last Element:</h3>";
echo "<ul>";
foreach($names as $name) {
    echo "<li>$name</li>";
}
echo "</ul>";

// e. Reverse order
$reversed_names = array_reverse($names);
echo "<h3>e. Array in Reverse Order:</h3>";
echo "<ul>";
foreach($reversed_names as $name) {
    echo "<li>$name</li>";
}
echo "</ul>";

// f. Search element
$search_name = isset($_POST['search']) ? $_POST['search'] : '';
if($search_name) {
    $position = array_search($search_name, $names);
    if($position !== false) {
        echo "<p>'$search_name' found at position $position</p>";
    } else {
        echo "<p>'$search_name' not found in the array</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
</head>
<body>
    <h3>f. Search in Array:</h3>
    <form method="post">
        <input type="text" name="search" required>
        <input type="submit" value="Search">
    </form>
</body>
</html>
