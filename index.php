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
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    </head>

    <body>
        <div>
            <?php include "./layout/header.php"; ?>
            <form action="save_invoice.php" method="post" class="form">
                <table class="table2">
                    <tr>
                        <td class="short">
                            <h4>期別：</h4>
                        </td>
                        <td><select name="period" class="btn dropdown-toggle" style="background: #fff350;">
                                <option value="1">1-2月</option>
                                <option value="2">3-4月</option>
                                <option value="3">5-6月</option>
                                <option value="4">7-8月</option>
                                <option value="5">9-10月</option>
                                <option value="6">11-12</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td class="short">
                            <h4>年份：</h4>
                        </td>
                        <td><select name="year" class="btn dropdown-toggle" style="background: #fff350;">
                                <option value="1">2020</option>
                                <option value="2">2021</option>
                                <option value="3">2022</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td class="short">
                            <h4> 獎號：</h4><input type="text" name="code">
                            
                        </td>
                        <td><input type="number" name="number"></td>
                    </tr>
                    <tr>
                        <td class="short">
                            <h3>花費：</h3>
                        </td>
                        <td><input type="number" name="expend"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="儲存" style="width:10rem;height:5rem;"></td>
                    </tr>
                </table>



                <!-- 共有 <?= $m ?>張發票
        抓取最後一筆ID作為發票的總數 -->
            </form>
        </div>





    </body>

    </html>