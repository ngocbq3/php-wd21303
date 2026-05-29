<?php
class Car
{
    public $name;
    public $brandName;
    public $color;

    /**
     * Hàm khởi tạo
     * Hàm này là hàm sẽ tự động chạy khi tạo 1 đối tượng
     */
    public function __construct($name, $brandName, $color)
    {
        $this->name = $name;
        $this->brandName = $brandName;
        $this->color = $color;
    }

    public function start()
    {
        echo $this->name . " Đang khởi động <br>";
    }
    public function stop()
    {
        echo $this->name . " Đã tắt máy <br>";
    }
}

//Tạo đối tượng từ lớp Car
$vf5 = new Car("VF5", "Vinfat", "Xanh");
$vf6 = new Car("VF6", "Vinfat", "Đỏ");

$vf5->start();
$vf5->stop();
