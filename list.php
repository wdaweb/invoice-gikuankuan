<?php include_once "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<title>發票列表</title>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="form1">
        <?php include "./layout/header.php"; ?>

        <h1 class="d-flex justify-content-center">發票列表</h1>
        <div class="d-flex justify-content-center">
            <ul class="nav">
                <li><button class="btn btn-outline-primary p-2"><a href="list.php?period=1">1 (1,2)</a></button></li>
                <li><button class="btn btn-outline-primary p-2"><a href="list.php?period=2">2 (3,4)</a></button></li>
                <li><button class="btn btn-outline-primary p-2"><a href="list.php?period=3">3 (1,6)</a></button></li>
                <li><button class="btn btn-outline-primary p-2"><a href="list.php?period=4">4 (7,8)</a></button></li>
                <li><button class="btn btn-outline-primary p-2"><a href="list.php?period=1">1 (9,10)</a></button></li>
                <li><button class="btn btn-outline-primary p-2"><a href="list.php?period=6">6 (11,12)</a></button></li>
            </ul>
        </div>
        <?php
        $period = 1;
        if (isset($_GET['period'])) {
            $period = $_GET['period'];
        }

        $sql = "select * from invoice where period='$period'";
        $rows = $pdo->query($sql)->fetchAll();
        ?>
        <div class="d-flex justify-content-center">
            <table class="m-1">
                <tr>
                    <td class="p-2">編號</td>
                    <td class="p-2">標記</td>
                    <td class="p-2">號碼</td>
                    <td class="p-2">花費</td>
                </tr>
                <?php

                foreach ($rows as $row) {
                ?>
                    <tr>
                        <td class="p-2"><?= $row['id']; ?></td>
                        <td class="p-2"><?= $row['code']; ?></td>
                        <td class="p-2"><?= $row['number']; ?></td>
                        <td class="p-2"><?= $row['expend']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <hr>
        <a href="./index.php" class="d-flex justify-content-center">重新輸入獎號</a>
    </div>
</body>

</html>