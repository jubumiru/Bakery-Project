<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">
    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-pink.css">
    <title>รายละเอียดของออเดอร์</title>
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Itim", sans-serif
        }

        body {
            font-size: 16px;
        }
    </style>
</head>

<body>

    <body>
        <!-- Navbar -->
        <?php include "navbara.php" ?>

        <!-- Left Panel -->
        <div class="w3-container" style="margin-left:170px;">
            <div class="w3-row">
                <div class="w3-col m2 w3-margin-top w3-white">
                    <div class="w3-bar-block">
                        <a href="admin_edit_pass.php" class="w3-bar-item w3-button w3-border">เปลี่ยนรหัสผ่าน</a>
                        <a href="admin_product.php" class="w3-bar-item w3-button w3-border">แก้ไขสินค้า</a>                
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
                                    <p>ชื่อ : ดาว</p>
                                    <p>เบอร์โทรศัพท์ : 012-3456789</p>
                                    <p>ที่อยู่ในการจัดส่ง : 23 ซ.3 สุทธิหรรษา หาดใหญ่ สงขลา 90110 </p>
                                    <p>วันที่ต้องการรับ : 2019-05-07 </p>
                                    <p>หลักฐานการชำระเงิน : <a href="">ดูหลักฐานการชำระ</a></p>
                                    <p>สถานะออเดอร์ : <select name="ostatus" id="">
                                            <option value="check">ชำระเงินแล้ว</option>
                                            <option value="agree">ได้รับชำระแล้ว</option>
                                            <option value="ignore">ปฏิเสธออเดอร์</option>
                                        </select></p>
                                </div>
                                <div class="w3-col m6 w3-padding">
                                    <p>นามสกุล : ชูคง</p>
                                </div>
                                <table class="w3-table-all" style="margin-top:20px;">
                                    <tr class="w3-padding">
                                        <th>ชื่อสินค้า</th>
                                        <th>ข้อความบนหน้าเค้ก</th>
                                        <th>จำนวน</th>
                                        <th>ราคา</th>
                                    </tr>
                                    <tr>
                                        <td>เค้กวนิลา</td>
                                        <td>สุขสันต์วันเกิด</td>
                                        <td>1 ชิ้น</td>
                                        <td>200</td>
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