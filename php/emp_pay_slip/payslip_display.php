<?php
session_start();

// Check if session data is set
if (!isset($_SESSION['salary'])) {
    echo "No salary data found!";
    exit();
}

// Fetch session data
$name = $_SESSION['name'];
$designation = $_SESSION['designation'];
$basic = $_SESSION['basic'];
$salary = $_SESSION['salary'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Pay Slip</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .payslip { width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; background: #f9f9f9; }
        .field { margin-bottom: 10px; }
    </style>
</head>
<body>

<h2>Employee Pay Slip</h2>

<div class="payslip">
    <div class="field">Employee Name: <?= htmlspecialchars($name) ?></div>
    <div class="field">Designation: <?= htmlspecialchars($designation) ?></div>
    <div class="field">Basic Salary: RS<?= number_format($basic, 2) ?></div>
    <div class="field">HRA (25%): RS<?= number_format($salary['hra'], 2) ?></div>
    <div class="field">Conveyance Allowance: RS<?= number_format($salary['conveyance'], 2) ?></div>
    <div class="field">Extra Allowance: RS<?= number_format($salary['extra'], 2) ?></div>
    <div class="field">Gross Salary: RS<?= number_format($salary['gross'], 2) ?></div>
    <div class="field">Income Tax: RS<?= number_format($salary['tax'], 2) ?></div>
    <div class="field">Net Salary: RS<?= number_format($salary['net'], 2) ?></div>
</div>

</body>
</html>

<?php
// Clear session data after displaying pay slip
session_unset();
session_destroy();
?>
