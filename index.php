<div class="form1">
<?php include_once "connect.php";?>
<!-- include PDO 很方便 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <!-- 外部連結css樣式 -->
    <title>統一發票管理系統</title>

</head>
<body>
<?php include "./layout/header.php";?>  


<form action="save_invoice.php" method="post">
    <h4>期別：</h4>
        <select name="period">
        <option value="1">1-2月</option>
        <option value="2">3-4月</option>
        <option value="3">5-6月</option>
        <option value="4">7-8月</option>
        <option value="5">9-10月</option>
        <option value="6">11-12</option>
        </select>
   <h4>年份：</h4>
    <select name="year">
        <option value="1">2020</option>
        <option value="2">2021</option>
        <option value="3">2022</option>
        </select>
        <br>
    <h4> 獎號：</h4>
    <input type="text" name="code">
    <input type="number" name="number">
    <br>
    <h4>花費：</h4>
    <input type="number" name="expend">
    <input type="submit" value="儲存">
    <br>

    <!-- 共有 <?=$m?>張發票
    抓取最後一筆ID作為發票的總數 -->
</form>
</div>
</body>
</html>