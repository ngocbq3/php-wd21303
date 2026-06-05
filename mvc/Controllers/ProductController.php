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

    //Hiển thị danh sách sản phẩm theo danh mục
    public function index() {
        //Lấy id của danh mục trên URL
        $id = $_GET['id'] ?? null;

        //lấy danh sách sản phẩm
        $products = $this->product->productInCategory($id);

        //Lấy danh sách danh mục để hiển thị lên menu
        $cateModel = new Category;
        $categories = $cateModel->all();

        include __DIR__ . '/../Views/front-end/products.php';
    }
}
