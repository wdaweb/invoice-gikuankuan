<?php include_once "connect.php"; ?>
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
        <a href="add_invoice.php"><button>新增開獎獎號</button></a>
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
                <td><input class="form-control" type="number" name="num4[]"><br>
                    <input class="form-control" type="number" name="num4[]"></td>
            </tr>
        </table>
        <input class="btn btn-outline-primary  p-3" type="submit" value="送出">
        
    </div>
</body>

</html>