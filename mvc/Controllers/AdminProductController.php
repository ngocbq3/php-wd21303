<?php

class AdminProductController
{
    public $productModel;
    public $categoryModel;

    public function __construct()
    {
        $this->productModel = new Product;
        $this->categoryModel = new Category;
    }

    //Hiển thị danh sách sản phẩm
    public function index()
    {
        //Lấy dữ liệu sản phẩm có tên danh mục
        $products = $this->productModel->getProducts();
        include __DIR__ . '/../Views/back-end/products.php';
    }
}
