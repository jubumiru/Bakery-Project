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
    <title>รายละเอียดของออเดอร์</title>
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
                                    <p>วันที่ต้องการรับ : </p>
                                </div>
                                <div class="w3-col m6 w3-padding">
                                    <p>นามสกุล : </p>
                                </div>
                                <table class="w3-table-all" style="margin-top:20px;">
                                    <tr class="w3-padding">
                                        <th>ชื่อสินค้า</th>
                                        <th class=>ข้อความและลายบนหน้าเค้ก</th>
                                        <th class=>จำนวน</th>
                                        <th class=>ราคา</th>
                                    </tr>
                                    <tr>
                                        <td class=>กก</td>
                                        <td class=>กกก</td>
                                        <td class=>กกก</td>
                                        <td>กกกก</td>
                                    </tr>
                                </table>


                            </div>
                            <div style="text-align:right;padding:2%;">
                                <a href="admin_order.php">ย้อนกลับ</a> || <a href="" class="w3-button w3-red w3-center w3-round-large">ยืนยัน</a>
                            </div>
                </div>
                </fieldset>
                </form>
            </div>
        </div>

    </body>

</html>