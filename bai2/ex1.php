<?php
//khởi tạo lớp Animal
class Animal
{
    //Khai báo các thuộc tính
    public $name;
    public $color;
    public $age;

    //Khai báo hành động
    public function run()
    {
        echo $this->name . " đang chạy <br>";
    }
    public function eat()
    {
        echo $this->name . " đang ăn <br>";
    }
}

//Tạo đối tượng từ lớp Animal
$dog = new Animal;
$dog->name = "Cậu vàng";
$dog->color = "Vàng";
$dog->age = 10;

$dog->run();
$dog->eat();
