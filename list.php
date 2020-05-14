<?php include_once "connect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php include "./layout/header.php";?>

<h1>發票列表</h1>

<ul class="nav">
<li><a href="list.php?period=1">1(1,2)</a></li>
<li><a href="list.php?period=2">2(3,4)</a></li>
<li><a href="list.php?period=3">3(5,6)</a></li>
<li><a href="list.php?period=4">4(7,8)</a></li>
<li><a href="list.php?period=5">5(9,10)</a></li>
<li><a href="list.php?period=6">6(11,12)</a></li>
</ul>

    <?php
   $period=1;
   if(isset($_GET['period'])){
       $period=$_GET['period'];
    }
    
    $sql="select * from invoice where period='$period'";
    $rows = $pdo -> query($sql)->fetchAll();
    ?>
<table>
    <tr>
        <td>編號</td>
        <td>標記</td>
        <td>號碼</td>
        <td>花費</td>
    </tr>
    <?php

    foreach($rows as $row){
    ?>
    <tr>
        <td><?=$row['id'];?></td>
        <td><?=$row['code'];?></td>
        <td><?=$row['number'];?></td>
        <td><?=$row['expend'];?></td>
    </tr>
<?php }?>
</table>
</body>
</html>