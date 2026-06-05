<?php

require_once __DIR__ . '/autoload.php';

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
    case 'category':
        (new ProductController)->index();
        break;
    default:
        echo "<h1>404 FILE NOT FOUND</h1>";
}
