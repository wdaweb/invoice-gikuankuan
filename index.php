<div class="form1">
    <?php include_once "connect.php"; ?>
    <!-- include PDO 很方便 -->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <!-- 外部連結css樣式 -->
        <title>統一發票管理系統</title>
        <link rel="stylesheet" href="./css/bootstrap.css">
        <script src="./js/bootstrap.bundle.min.js"></script>
        <script src="./js/jquery-3.5.1.min.js"></script>
    </head>

    <body>
        <div>
            <?php include "./layout/header.php"; ?>
            <form action="save_invoice.php" method="post">
                <h3>期別：</h3>
                <select name="period">
                    <option value="1">1-2月</option>
                    <option value="2">3-4月</option>
                    <option value="3">5-6月</option>
                    <option value="4">7-8月</option>
                    <option value="5">9-10月</option>
                    <option value="6">11-12</option>
                </select>
                <h3>年份：</h3>
                <select name="year">
                    <option value="1">2020</option>
                    <option value="2">2021</option>
                    <option value="3">2022</option>
                </select>
                <br>
                <h3> 獎號：</h3>
                <input type="text" name="code">
                <input type="number" name="number">
                <br>
                <h3>花費：</h3>
                <input type="number" name="expend">
                <input type="submit" value="儲存">
                <br>

                <!-- 共有 <?= $m ?>張發票
        抓取最後一筆ID作為發票的總數 -->
            </form>
        </div>
    </body>

    </html>