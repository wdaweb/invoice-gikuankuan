<?php include_once "connect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
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
<hr>
<a href="./index.php">重新輸入獎號</a>
</body>
</html>