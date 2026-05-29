<?php

class HomeController
{
    public function index()
    {
        //Lấy dữ liệu
        $product = new Product;
        $products = $product->all();

        include __DIR__ . "/../Views/front-end/home.php";
    }
}
