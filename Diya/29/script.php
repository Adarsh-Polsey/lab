<?php

if (isset($_POST['number']) && isset($_POST['limit'])) {
    $number = intval($_POST['number']);  // Ensuring it's an integer
    $l = intval($_POST['limit']);        // Ensuring it's an integer

    if ($number > 0 && $l > 0) { // Simple validation to ensure positive numbers
        echo "<br><center><h2>Multiplication Table of $number</h2>";
        echo "<center><table border='1' cellpadding='10' style='border-collapse: collapse;'>";

        for ($i = 1; $i <= $l; $i++) {
            echo "<tr>";
            echo "<td>" . $number . "</td>";
            echo "<td> x </td>";
            echo "<td>" . $i . "</td>";
            echo "<td> = </td>";
            echo "<td>" . ($number * $i) . "</td>";
            echo "</tr>";
        }

        echo "</table></center>";
    } else {
        echo "<center><p style='color:red;'>Please enter valid positive numbers.</p></center>";
    }
} else {
    echo "<center><p style='color:red;'>Both fields are required.</p></center>";
}

?>
