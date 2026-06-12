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

    //Thêm mới sản phẩm
    public function create()
    {
        $categories = $this->categoryModel->all(); //dữ liệu danh mục
        include __DIR__ . '/../Views/back-end/product-create.php';
    }
    //Phương thức lưu dữ liệu mới cào data
    public function store()
    {
        //Lấy dữ liệu từ form
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
        $category_id = $_POST['category_id'];
        //Lấy ra file ảnh
        $file = $_FILES['image'];
        //Upload hình ảnh vào thư mục images
        $image = 'images/' . $file['name'];

        move_uploaded_file($file['tmp_name'], $image);

        $this->productModel->create($name, $image, $price, $quantity, $description, $category_id); //Lưu vào database

        header("location: index.php?act=admin&ctl=products");
    }
}
