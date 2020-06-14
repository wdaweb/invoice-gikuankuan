<?php

include_once "connect.php";


// 年分 year
// 期數 peripd
// 特別獎 num1
// 特獎 num2
// 頭獎 num3
// 六獎 num4




$table = "award";

$year=$_POST['year'];
$period=$_POST['period'];

$num1 = $_POST['num1'];
    $data=[
        "year"=> $year,
        "period"=>$period,
        "number"=>$num1,
        "type"=>1,
    ];
save($table,$data);
//特別獎1
$num2 = $_POST['num2'];
    $data=[
        "year"=> $year,
        "period"=>$period,
        "number"=>$num2,
        "type"=>2,
    ];
save($table,$data);
//特別獎2

$num3 = $_POST['num3'];
foreach($num3 as $num){
    $data=[
        "year"=> $year,
        "period"=>$period,
        "number"=>$num,
        "type"=>3,
    ];
save($table,$data);
}
//特別獎3


$num4 = $_POST['num4'];
foreach($num4 as $num){
    $data=[
        "year"=> $year,
        "period"=>$period,
        "number"=>$num,
        "type"=>4,
    ];
save($table,$data);}
//特別獎4


to("invoice.php");
?>