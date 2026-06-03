<?php

class ProductController
{
    public $product;
    public function __construct()
    {
        $this->product = new Product;
    }

    public function show()
    {
        //Lấy dữ liệu danh mục
        $cateModel = new Category;
        $categories = $cateModel->all();

        //Lấy id trên URL
        $id = $_GET['id'] ?? null;

        $product = $this->product->find($id);

        if (!$product) {
            echo "404 FILE NOT FOUND";
            die;
        }
        //Lấy id của danh mục
        $category_id = $product['category_id'];
        //Sản phẩm cùng danh mục
        $productInCategory = $this->product->productInCategory($category_id);

        include __DIR__ . "/../Views/front-end/detail.php";
    }
}
