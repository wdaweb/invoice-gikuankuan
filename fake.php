<?php
include_once "./connect.php";

$num = 1000;
$char = ["A", "B", "C", "D", "E", "F", "G"];


for ($i = 0; $i < $num; $i++) {
    $code = $char[rand(0, 11) . $char(0, 11)];
    $data = [
        'period' => rand(1, 6),
        'year' => 2020,
        'code' => $code,
        'number' => rand(12111111, 99999999),
        'expend' => rand(100, 99999),
    ];
}

echo "已新增" . $data["code"] . $data['number'] . "<br>";
save("invoice", $data);
