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

    //Admin
    case "admin":
        //biến $ctl để điều khiển vào các trang con của admin
        $ctl = $_GET['ctl'] ?? '';
        switch ($ctl) {
            case '':
            case 'products': //danh sách sản phẩm
                (new AdminProductController)->index();
                break;
            case 'product-create':
                (new AdminProductController)->create();
                break;
            case 'product-store':
                (new AdminProductController)->store();
                break;

            default:
                echo "<h1>404 FILE NOT FOUND</h1>";
        }

        break;
    //Kết thúc admin
    default:
        echo "<h1>404 FILE NOT FOUND</h1>";
}
