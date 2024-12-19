<?php

    if ($_POST) {
        echo "<table style='padding: 20px; margin: auto; font-size: 35px; border-collapse: collapse;' border='2' align='center'>";

        echo "<caption><h1>Biodata</caption></h1>";

        echo "<tr><td>Name: </td><td>" . $_POST["name1"] . "</td></tr>";

        echo "<tr><td>City: </td><td>" . $_POST["address"] . "</td></tr>";

        echo "<tr><td>Age: </td><td>" . $_POST["age"] . "</td></tr>";

        echo "<tr><td>Mobile:</td><td> " . $_POST["phone"] . "</td></tr>";

        echo "<tr><td>Email:</td><td> " . $_POST["email"] . "</td></tr>";

        echo "<tr><td>Qualification: </td><td>" . $_POST["qualification"] . "</td></tr>";

        echo "</table>";
    }

?>