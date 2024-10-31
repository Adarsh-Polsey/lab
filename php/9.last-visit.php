<?php
$cookie_name = "last_visit";
$current_time = date("Y-m-d H:i:s");

// Get last visit time if cookie exists
$last_visit = isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] : "This is your first visit!";

// Set cookie with current time (expires in 30 days)
setcookie($cookie_name, $current_time, time() + (86400 * 30), "/");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Last Visit Time</title>
</head>
<body>
    <h2>Visit Information</h2>
    <p>Current Time: <?php echo $current_time; ?></p>
    <p>Last Visit: <?php echo $last_visit; ?></p>
</body>
</html>
