<?php

class HomeController
{
    public function index()
    {
        //Lấy dữ liệu
        $product = new Product;
        $products = $product->all();

        //Lấy dữ liệu danh mục
        $cateModel = new Category;
        $categories = $cateModel->all();

        include __DIR__ . "/../Views/front-end/home.php";
    }
}
