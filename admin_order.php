<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-pink.css">
    <title>Admin</title>
</head>

<body>

    <body>
        <!-- Navbar -->
        <?php include "php/navbara.php" ?>

        <!-- Left Panel -->
        <div class="w3-container" style="margin-left:170px;">
            <div class="w3-row">
                <div class="w3-col m2 w3-margin-top w3-white">
                    <div class="w3-bar-block">
                        <a href="admin_edit_pass.php" class="w3-bar-item w3-button w3-border">เปลี่ยนรหัสผ่าน</a>
                        <a href="admin_product.php" class="w3-bar-item w3-button w3-border">แก้ไขสินค้า</a>
                        <a href="admin_promotion.php" class="w3-bar-item w3-button w3-border">แก้ไขโปรโมชัน</a>
                        <a href="admin_order.php" class="w3-bar-item w3-button w3-border">รายการสั่งซื้อ</a>
                        <a href="admin_report.php" class="w3-bar-item w3-button w3-border">รายงานการขาย</a>
                    </div>
                </div>

                <!-- Right Panel -->
                <div class="w3-col m8 w3-margin-top w3-margin-left">
                    <form>
                        <fieldset class="">
                            <legend>รายการสั่งซื้อ</legend>
                            <table class="w3-table-all" >
                                <tr class="w3-theme-l3">
                                    <th>หมายเลขสมาชิก</th>
                                    <th>หมายเลขออเดอร์</th>
                                    <th>วันที่</th>
                                    <th>สถานะ</th>
                                    <th>รายละเอียด</th>
                                </tr>
                                <tr>
                                    <td>012</td>
                                    <td>345</td>
                                    <td>10/10/2561</td>
                                    <td>ชำระเงินแล้ว</td>
                                    <td><a href="admin_order_detail.php">ดูรายละเอียด</a></td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </div>
            </div>
    </body>
</body>

</html>