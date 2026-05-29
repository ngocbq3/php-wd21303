<?php

class SinhVien
{
    public $ten;
    public $diem;

    public function nhap($ten, $diem)
    {
        $this->ten = $ten;
        $this->diem = $diem;
    }

    public function xuat()
    {
        echo "Tên sinh viên: {$this->ten} <br>";
        echo "Điểm sinh viên: {$this->diem} <br>";
    }

    public function xepLoai()
    {
        if ($this->diem >= 9) {
            echo "Sinh viên {$this->ten} đạt học lực xuất sắc <br>";
        } else if ($this->diem >= 8) {
            echo "Sinh viên {$this->ten} đạt học lực giỏi <br>";
        } else if ($this->diem >= 7) {
            echo "Sinh viên {$this->ten} đạt học lực khá <br>";
        } else if ($this->diem >= 5) {
            echo "Sinh viên {$this->ten} đạt học lực trung bình <br>";
        } else {
            echo "Sinh viên {$this->ten} đạt học lực yếu <br>";
        }
    }
}

$sv1 = new SinhVien;
$sv2 = new SinhVien;

$sv1->nhap('Long', 9);
$sv1->xuat();
$sv1->xepLoai();

$sv2->nhap('Loan', 8);
$sv2->xuat();
$sv2->xepLoai();
