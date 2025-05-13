<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login_form.php");
    exit();

}
?>



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h2>Profile</h2>
    <p>Username:</p>
    <p>Your are loggined!</p>
    
</body>
</html>