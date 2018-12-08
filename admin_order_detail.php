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
    <title>Document</title>
</head>

<body>

    <body>
        <!-- Navbar -->
        <?php include "php/navbar.php" ?>

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
                            <legend>รายละเอียดของออเดอร์</legend>
                            <div class="w3-row">
                                <div class="w3-col m6 w3-padding">
                                    <p>ชื่อ : </p>
                                    <p>เบอร์โทรศัพท์ : </p>
                                    <p>ที่อยู่ในการจัดส่ง : </p>
                                    <p>สินค้าที่สั่ง : </p>
                                    <p>ข้อความและลายบนหน้าเค้ก : </p>
                                    <p>วันที่ต้องการรับ : </p>
                                    <p>สถานะออเดอร์ :
                                        <select style="float:center;">
                                            <option value="volvo">ชำระเงินแล้ว</option>
                                            <option value="saab">ปฏิเสธออเดอร์</option>
                                            <option value="fiat">กำลังจัดส่ง</option>
                                        </select></p>
                                </div>
                                <div class="w3-col m6 w3-padding">
                                    <p>นามสกุล : </p>
                                </div>

                            </div>
                            <div style="text-align:right;">
                            <a href="admin_order.php">ย้อนกลับ</a> || <a href="" class="w3-button w3-red w3-center w3-round-large">ยืนยัน</a>
                        </div>
                    </div>
                </fieldset>
                </form>
            </div>
        </div>

    </body>

</html>