<?php include_once "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<title>對獎</title>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include "title.php"; ?></title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
     
</head>

<body>
<?php include_once "title.html"; ?>
    <div class="form1">
        <?php include "./layout/header.php"; ?>
        <?php
        //可惡一次對獎功能!!!!!
        // if (isset($_GET['period'])) {
        //     $period = $_GET['period'];
        // } else {
        //     echo "當期還沒開獎喔！";
        // } //確定有沒有傳直過來


        // $sql = "SELECT * from award where `period`= '$period'"; //兌獎的
        // $award = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

        // $sql_invoice = "SELECT * from invoice where `period` = '$period'"; //原始的
        // $invoice = $pdo->query($sql_invoice)->fetchAll(PDO::FETCH_ASSOC);

        // $gold1 = $award['1'];
        // $gold2 = $award['2'];
        // $gold3 = $award['3'];
        // $gold4 = $award['4'];



        // foreach ($invoice as $invoice) {
        //     $period = $invoice['period'];
        //     $number = $invoice['number'];
        //     // $expend = $invoice['expend'];
        //     if ($number == $gold1) {

        //         $money = $money + 10000000;
        //         echo $money;
        //     } else {

        //         echo "沒中獎";
        //     }
        // }
        ?>
        <?php

        if (empty($_GET)) {
            echo "<div style='margin:auto;'><h3 >請選擇要對獎的項目<a href='invoice.php'>各期獎號</a></h3></div>";
            exit();
        }

        $award_type = [
            1 => ["特別獎", 1, 8],
            2 => ["特獎", 2, 8],
            3 => ["頭獎", 2, 8],
            4 => ["二獎", 3, 7],
            5 => ["三獎", 3, 6],
            6 => ["四獎", 3, 5],
            7 => ["五獎", 3, 4],
            8 => ["六獎", 3, 3],
            9 => ["增開六獎", 4, 3],
        ];
        $aw = $_GET['aw'];
        echo "獎別：" . $award_type[$_GET['aw']][0] . "<br>";
        echo "年份：" . $_GET['year'] . "<br>";
        echo "期別：" . $_GET['period'] . "<br>";

        $award_nums = nums("award", [
            "year" => $_GET['year'],
            "period" => $_GET['period'],
            "type" => $award_type[$_GET['aw']][1],
        ]);
        echo "獎號數量：" . $award_nums;

        $award_numbers = all("award", [
            "year" => $_GET['year'],
            "period" => $_GET['period'],
            "type" => $award_type[$aw][1],
        ]);
        echo "<h4>對獎獎號</h4>";
        $t_num = [];



        foreach ($award_numbers as $num) {
            echo $num['number'] . "<br>";
            $t_num[] = $num['number'];
        }

        echo "<h4>該期發票號碼</h4>";
        $invoice = all("invoice", [
            "year" => $_GET['year'],
            "period" => $_GET['period'],
        ]);

        foreach ($invoice as $ins) {
            foreach ($t_num as $tn) {
                $len = 0 - $award_type[$aw][2];

                $target_num = mb_substr($tn, $len);

                if (mb_substr($ins['number'], $len) == $target_num) {
                    echo "<h2 style='color:red'>" . $ins['number'] . "中獎了</h2>" . "<br>";
                }
            }
        }

        ?>


    </div>
</body>

</html>