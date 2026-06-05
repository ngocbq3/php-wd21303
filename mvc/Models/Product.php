<?php
//Đây là lớp dùng để thao tác dữ liệu với bảng products
class Product
{
    public $conn;
    public function __construct()
    {
        $db = new Database;
        $this->conn = $db->connect(); //gán đối tượng kết nối cho thuộc tính conn
    }

    //Lấy toàn bộ dữ liệu của bảng products
    public function all()
    {
        $sql = "SELECT * FROM products ORDER BY id DESC";
        //Chuẩn bị câu lệnh sql
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        //Lấy dữ liệu
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Trả lại dữ liệu cho hàm 
        return $result;
    }

    //Lấy dữ liệu sản phẩm theo danh mục
    public function productInCategory($category_id)
    {
        //Câu lệnh SQL có chưa tham số :category_id
        $sql = "SELECT * FROM products WHERE category_id = :category_id ORDER BY id DESC";
        //Chuẩn bị câu lệnh sql
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $params = ['category_id' => $category_id];
        $stmt->execute($params);
        //Lấy dữ liệu
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Trả lại dữ liệu cho hàm 
        return $result;
    }

    //Lấy ra 1 bản ghi (1 sản phẩm)
    public function find($id)
    {
        $sql = "SELECT * FROM products WHERE id = :id";
        //Chuẩn bị câu lệnh sql
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $params = ['id' => $id];
        $stmt->execute($params);
        //Lấy dữ liệu
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        //Trả lại dữ liệu cho hàm 
        return $result;
    }

    /**
     * //Phân trang cho sản phẩm
     * $page: trang hiện tại
     * $perPage: Số lượng bản ghi/ 1 trang
     * $totalPage: tổng số trang 
     */
    public function paginate($page=1, $perPage=10, $totalPage=1) {
        //Bản ghi bắt đầu
        $startRecord = ($page - 1) * $perPage;
        $sql = "SELECT * FROM products LIMIT $startRecord, $perPage";

        //Chuẩn bị câu lệnh sql
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        //Lấy dữ liệu
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Trả lại dữ liệu cho hàm 
        return $result;
    }
}
