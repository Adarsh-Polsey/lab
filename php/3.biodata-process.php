<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $education = $_POST['education'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bio Data Display</title>
    <style>
        .biodata {
            width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        .field {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="biodata">
        <h2>Bio Data Information</h2>
        <div class="field">
            <span class="label">Name:</span> <?php echo $name; ?>
        </div>
        <div class="field">
            <span class="label">Date of Birth:</span> <?php echo $dob; ?>
        </div>
        <div class="field">
            <span class="label">Gender:</span> <?php echo $gender; ?>
        </div>
        <div class="field">
            <span class="label">Email:</span> <?php echo $email; ?>
        </div>
        <div class="field">
            <span class="label">Phone:</span> <?php echo $phone; ?>
        </div>
        <div class="field">
            <span class="label">Address:</span> <?php echo nl2br($address); ?>
        </div>
        <div class="field">
            <span class="label">Education:</span> <?php echo nl2br($education); ?>
        </div>
    </div>
</body>
</html>
<?php
}
?>
