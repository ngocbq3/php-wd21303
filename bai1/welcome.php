<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:login.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <h1>Chào mừng <?= $_SESSION['user'] ?> đến với website</h1>
</body>

</html>