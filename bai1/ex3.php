<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $mssv = $_POST['mssv'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];

    echo "<h1>Thông tin người dùng</h1>";
    echo "MSSV: $mssv <br>";
    echo "Họ tên: $fullname <br>";
    echo "email: $email <br>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h1>Thông tin sinh viên</h1>
    <form action="" method="post">
        <div>
            <label for="">Mã sinh viên</label>
            <input type="text" name="mssv" id="">
        </div>
        <div>
            <label for="">họ tên</label>
            <input type="text" name="fullname" id="">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" id="">
        </div>
        <div>
            <button type="submit">Gửi</button>
        </div>
    </form>
</body>

</html>