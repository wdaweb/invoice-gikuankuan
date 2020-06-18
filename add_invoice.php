<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增開獎獎號</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include_once "title.html"; ?>
    <div class="form1">
        <?php include "./layout/header.php";
        include_once "connect.php";
        ?>

        <form action="save_number.php" method="post" class="form1">
            <table class="table text-center" style="margin: auto;">
                <tr>
                    <td>年月份</td>
                    <td>
                        <input type="number" name="year">

                        <select name="period">
                            <option value="1">1,2月</option>
                            <option value="2">3,4月</option>
                            <option value="3">5,6月</option>
                            <option value="4">7,8月</option>
                            <option value="5">9,10月</option>
                            <option value="6">11,12月</option>
                        </select>

                    </td>
                </tr>

                <tr>
                    <td>特別獎</td>
                    <td><input type="number" name="num1"></td>
                </tr>

                <tr>
                    <td>特獎</td>
                    <td><input type="number" name="num2"></td>
                </tr>

                <tr>
                    <td>頭獎</td>
                    <td>
                        <input type="number" name="num3[]" class="m-1"><br>
                        <input type="number" name="num3[]" class="m-1"><br>
                        <input type="number" name="num3[]" class="m-1"><br>

                    </td>
                </tr>

                <tr>
                    <td>增開六獎</td>
                    <td>
                        <input type="number" name="num4[]">
                    </td>
                </tr>
            </table>
            <input type="submit" value="送出">


        </form>
    </div>
</body>

</html>