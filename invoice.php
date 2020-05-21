<?php include_once "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<title>各期獎號</title>

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include "title.php"; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="form1">
        <?php include "./layout/header.php"; ?>
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