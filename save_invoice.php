<?php
include_once "connect.php";

$sql="insert into invoice 
(`period`,
`year`,
`code`,
`number`,
`expend`)
values(
    '".$_POST['period']."',
    '".$_POST['year']."',
    '".$_POST['code']."',
    '".$_POST['number']."',
    '".$_POST['expend']."')";
    echo $sql;

$res=$pdo -> exec($sql);

if($res==1){
 echo "新增成功";
 header('location:http://localhost/index.php');
//  新增成功跳到首頁
}else{
    echo "新增失敗";
}

?>