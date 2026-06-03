<?php
require_once __DIR__ . "/Controllers/HomeController.php";
require_once __DIR__ . "/Controllers/ProductController.php";

require_once __DIR__ . "/Models/Database.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Category.php";

$act = $_GET['act'] ?? 'home';

switch ($act) {
    case '':
    case 'home':
        $home = new HomeController;
        $home->index();
        break;
    case 'contact':
        echo "<h1>Đây là trang liên hệ</h1>";
        break;
    case 'about':
        echo "<h1>Đây là trang giới thiệu</h1>";
        break;
    case 'detail':
        (new ProductController)->show();
        break;
    default:
        echo "<h1>404 FILE NOT FOUND</h1>";
}
