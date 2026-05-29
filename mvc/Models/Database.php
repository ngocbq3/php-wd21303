<?php

class Database
{
    public $conn; //thuộc tính dùng để lưu kết nối CSDL

    public function __construct()
    {
        //Thông tin kết nối đến CSDL
        $host = "localhost"; //server chứa CSDL
        $db_name = "wd21303_php1"; //Tên CSDL
        $username = "root"; //tài khoản truy cập vào CSDL
        $password = "";
        $port = 3306; //Cổng của CSDL

        try {
            //Kết nối đến CSDL để làm việc
            $this->conn = new PDO("mysql:host=$host; dbname=$db_name; charset=utf8; port=$port", $username, $password);
            echo "Kết nối dữ liệu thành công"; //dùng để test xong xóa đi
        } catch (PDOException $e) {
            echo "Lỗi kết nối CSDL: " . $e->getMessage();
        }
    }
}
