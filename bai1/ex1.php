<?php
//Câu lệnh điều kiện
$point = 9;
if ($point >= 9) {
    echo "Điểm xuất sắc";
} else if ($point >= 8) {
    echo "Điểm giỏi";
} else if ($point >= 5) {
    echo "Điểm khá";
} else {
    echo "Điểm yếu";
}

//switch case
echo "<h1>Lệnh switch case</h1>";
$point = 'E';

switch ($point) {
    case 'A':
        echo "Xuất sắc";
        break;
    case 'B':
        echo "Khá";
        break;
    case 'C':
        echo "Trung bình";
        break;
    default:
        echo "yếu";
}
