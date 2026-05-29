<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == 'admin' && $password == '123abc'){
            //Khởi tạo session
            $_SESSION['user'] = 'admin';
            header('location: welcome.php');
            die;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Đăng nhập</h1>
    <form action="" method="post">
        <div>
            <label for="">username</label>
            <input type="text" name="username" id="">
        </div>
        <div>
            <label for="">password</label>
            <input type="password" name="password" id="">
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>