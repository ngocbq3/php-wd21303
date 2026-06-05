<?php

spl_autoload_register(function($className){
    //Cài đặt thư mục muốn autoload
    $directories = [
        'Models/',
        'Controllers/'
    ];

    foreach ($directories as $dir) {
        $file = __DIR__ . '/' . $dir . $className . '.php';
        //Kiểm tra xem file có tồn tại không
        if (file_exists($file)) {
            //Nều file có tồn tại thì mới require
            require_once $file;
            return;
        }
    }

    die(' Đường dẫn ' . $file . ' hoặc ' . $className . ' không tồn tài: ');
});