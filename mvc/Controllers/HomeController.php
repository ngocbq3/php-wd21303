<?php

class HomeController
{
    public function index()
    {
        //Lấy dữ liệu
        $product = new Product;
        // $products = $product->all();

        //Lấy dữ liệu danh mục
        $cateModel = new Category;
        $categories = $cateModel->all();

        //Lấy trang hiện tại trên URL
        $page = $_GET['page'] ?? 1;
        //Lấy tổng số bản ghi
        $total = count($product->all());
        //Số lượng bản ghi / 1 trang
        $perPage = 9;
        //Tính tổng số trang
        $totalPage = ceil($total / $perPage);
        //Lấy sản phẩm đã phân trang
        $products = $product->paginate($page, $perPage, $totalPage);

        include __DIR__ . "/../Views/front-end/home.php";
    }
}
