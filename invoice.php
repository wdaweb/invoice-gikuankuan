<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">


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
    <?php include_once "title.html"; ?>
    
        <div class="form1">
            <?php include_once "./layout/header.php"; ?>
            <div style="width:60%;margin:auto;">
            <a href="add_invoice.php"><button class="btn-1 p-1 m-2">新增開獎獎號</button></a>
            <select name="period" onchange="location.href=this.options[this.selectedIndex].value">
                <option>選擇月份</option>
                <option value="invoice.php?period=1">1,2月</option>
                <option value="invoice.php?period=2">3,4月</option>
                <option value="invoice.php?period=3">5,6月</option>
                <option value="invoice.php?period=4">7,8月</option>
                <option value="invoice.php?period=5">9,10月</option>
                <option value="invoice.php?period=6">11,12月</option>
            </select>

            <a href="award.php?period=<?= $period ?>"><button class="btn-1 p-1 m-2">一次兌獎囉！</button></a>
        </div>
        <?php
        $num1 = find('award', ['period' => $period, 'year' => $year, 'type' => 1]); //單筆
        $num2 = find('award', ['period' => $period, 'year' => $year, 'type' => 2]); //單筆
        $num3 = all('award', ['period' => $period, 'year' => $year, 'type' => 3]); //多筆
        $num4 = all('award', ['period' => $period, 'year' => $year, 'type' => 4]); //多筆

        ?>


        <table class="table text-center">
            <tr>
                <td>年月份</td>
                <td><?= $year; ?>年 <?= $monthStr[$period]; ?></td>
            </tr>
            <tr>
                <td>特別獎</td>
                <td><?php
                    if (!empty($num1['number'])) {
                        echo $num1['number'];
                    };

                    ?></td>
                <td>
                    <a class="btn btn-outline-secondary" href="award.php?aw=1&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a>
                </td>
            </tr>
            <tr>
                <td>特獎</td>
                <td><?php
                    if (!empty($num2['number'])) {
                        echo $num2['number'];
                    };

                    ?></td>
                <td>
                    <a class="btn btn-outline-secondary" href="award.php?aw=2&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a>
                </td>
            </tr>
            <tr>
                <td>頭獎</td>
                <td> <?php
                        foreach ($num3 as $num) {
                            echo $num['number'] . "<br>";
                        }

                        ?></td>
                <td>
                    <a class="btn btn-outline-secondary" href="award.php?aw=3&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a>
                </td>
            </tr>
            <tr>
                <td>二獎</td>
                <td>末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4萬元</td>
            </tr>
            <tr>
                <td>三獎</td>
                <td>末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元</td>
            </tr>
            <tr>
                <td>四獎</td>
                <td>末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元</td>
            </tr>
            <tr>
                <td>五獎</td>
                <td>末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元</td>
            </tr>
            <tr>
                <td>六獎</td>
                <td>末3 位數號碼與 頭獎中獎號碼末3 位相同者各得獎金2百元</td>
            </tr>
            <tr>
                <td>增開六獎</td>
                <td><?php
                    foreach ($num4 as $num) {
                        echo $num['number'] . "<br>";
                    }
                    ?>
                <td>
                    <a class="btn btn-outline-secondary" href="award.php?aw=9&year=<?= $year; ?>&period=<?= $period; ?>">對獎</a>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>