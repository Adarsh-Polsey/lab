<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $basic = $_POST['basic'];
    $designation = $_POST['designation'];

    $salary = calculateSalary($basic, $designation);
    
    $_SESSION['name'] = $name;
    $_SESSION['designation'] = $designation;
    $_SESSION['basic'] = $basic;
    $_SESSION['salary'] = $salary;
    
    header("Location: payslip_display.php");
    exit();
}

function calculateSalary($basic, $designation) {
    $allowances = [
        'Manager' => ['conveyance' => 1000, 'extra' => 500],
        'Supervisor' => ['conveyance' => 750, 'extra' => 200],
        'Clerk' => ['conveyance' => 500, 'extra' => 100],
        'Peon' => ['conveyance' => 250, 'extra' => 0]
    ];
    
    $hra = $basic * 0.25;
    $conveyance = $allowances[$designation]['conveyance'];
    $extra = $allowances[$designation]['extra'];
    
    $gross = $basic + $hra + $conveyance + $extra;
    
    if ($gross <= 2500) {
        $tax = 0;
    } elseif ($gross <= 4000) {
        $tax = $gross * 0.03;
    } elseif ($gross <= 5000) {
        $tax = $gross * 0.05;
    } else {
        $tax = $gross * 0.08;
    }
    
    $net = $gross - $tax;
    
    return [
        'hra' => $hra,
        'conveyance' => $conveyance,
        'extra' => $extra,
        'gross' => $gross,
        'tax' => $tax,
        'net' => $net
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Pay Slip Generator</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .payslip { width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; background: #f9f9f9; }
        .field { margin-bottom: 10px; }
        input, select, button { width: 100%; padding: 10px; margin-top: 10px; }
        button { background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        .error { color: red; text-align: center; }
    </style>
</head>
<body>

<h2>Employee Pay Slip Generator</h2>

<form method="post">
    <div class="field">
        <label>Employee Name:</label><br>
        <input type="text" name="name" required>
    </div>
    <div class="field">
        <label>Basic Salary:</label><br>
        <input type="number" name="basic" required>
    </div>
    <div class="field">
        <label>Designation:</label><br>
        <select name="designation" required>
            <option value="Manager">Manager</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Clerk">Clerk</option>
            <option value="Peon">Peon</option>
        </select>
    </div>
    <button type="submit">Generate Pay Slip</button>
</form>

</body>
</html>
