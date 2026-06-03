<?php

class Category
{
    public $conn;
    public function __construct()
    {
        $db = new Database;
        $this->conn = $db->connect(); //gán đối tượng kết nối cho thuộc tính conn
    }

    public function all()
    {
        $sql = "SELECT * FROM categories";
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
