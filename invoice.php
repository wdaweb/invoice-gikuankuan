<?php include_once "connect.php";
$period = ceil(date("n") / 2);

$monthStr = [
    '1' => "1-2月",
    '2' => "3-4月",
    '3' => "5-6月",
    '4' => "7-8月",
    '5' => "9-10月",
    '6' => "11-12月",
];

if (isset($_GET['period'])) {
    $period = $_GET['period'];
}
$year = date("Y"); 
?>
<!DOCTYPE html>
<html lang="en">
<title>各期獎號</title>

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include "title.php"; ?></title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="form1">
        <?php include "./layout/header.php"; ?>
        <a href="add_invoice.php"><button class="btn-1 p-1 m-2">新增開獎獎號</button></a>
        <select name="period">
             <option value="1"><a href="invoice.php?period=1" style="background:<?=($period==1)?'lightgreen':'white';?>">1,2月</a></option>
             <option value="2"><a href="invoice.php?period=2" style="background:<?=($period==2)?'lightgreen':'white';?>">3,4月</a></option>
             <option value="3"><a href="invoice.php?period=3" style="background:<?=($period==3)?'lightgreen':'white';?>">5,6月</a></option>
             <option value="4"><a href="invoice.php?period=4" style="background:<?=($period==4)?'lightgreen':'white';?>">7,8月</a></option>
             <option value="5"><a href="invoice.php?period=5" style="background:<?=($period==5)?'lightgreen':'white';?>">9,10月</a></option>
             <option value="6"><a href="invoice.php?period=6" style="background:<?=($period==6)?'lightgreen':'white';?>">11,12月</a></option>
        </select>


        

        <table class="table text-center">
            <tr>
                <td>年月份</td>
                <td>109年01~02月</td>
            </tr>
            <tr>
                <td>特別獎</td>
                <td><input class="form-control" type="number" name="num1"></td>
            </tr>
            <tr>
                <td>特獎</td>
                <td><input class="form-control" type="number" name="num2"></td>
            </tr>
            <tr>
                <td>頭獎</td>
                <td><input class="form-control" type="number" name="num3[]"><br>
                    <input class="form-control" type="number" name="num3[]"><br>
                    <input class="form-control" type="number" name="num3[]"><br>
                    <input class="form-control" type="number" name="num3[]"><br></td>
            </tr>
            <tr>
                <td>二獎</td>
                <td></td>
            </tr>
            <tr>
                <td>三獎</td>
                <td></td>
            </tr>
            <tr>
                <td>四獎</td>
                <td></td>
            </tr>
            <tr>
                <td>五獎</td>
                <td></td>
            </tr>
            <tr>
                <td>六獎</td>
                <td></td>
            </tr>
            <tr>
                <td>增開六獎</td>
                <td><input class="form-control" type="number" name="num4[]">

            </tr>
        </table>
    </div>
</body>

</html>