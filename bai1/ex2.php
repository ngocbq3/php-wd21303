<?php
//vòng lặp for
for ($i = 0; $i < 5; $i++) {
    echo "Vòng lặp thứ $i <br>";
}

//Vòng lặp foreach
$sinhvien = [
    [
        'mssv' => 'ph12345',
        'name'  => 'Nguyễn Văn A',
        'email' => 'anv@gmail.com'
    ],
    [
        'mssv' => 'ph12346',
        'name'  => 'Nông văn dền',
        'email' => 'dennv@gmail.com'
    ],
    [
        'mssv' => 'ph12347',
        'name'  => 'Trần Văn Thái',
        'email' => 'thaitv@gmail.com'
    ],
];
foreach ($sinhvien as $sv) {
    echo "Họ tên: " . $sv['name'];
    echo "<br>email: " . $sv['email'];
    echo "<hr>";
}
