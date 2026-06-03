<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="container nav">
            <div class="logo">SHOP ONLINE</div>

            <ul class="menu">
                <li><a href="index.php">Trang chủ</a></li>
                <!--Lấy dữ liệu danh mục-->
                <?php foreach ($categories as $cate) : ?>
                    <li>
                        <a href="index.php?act=category&id=<?= $cate['id'] ?>">
                            <?= $cate['name'] ?>
                        </a>
                    </li>
                <?php endforeach ?>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>
    </header>