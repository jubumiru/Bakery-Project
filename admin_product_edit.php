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
                        <fieldset>
                            <legend>แก้ไขสินค้า</legend>
                            <div class="w3-row w3-section">
                                <div class="w3-col" style="width:150px">
                                    <p>รูปภาพ</p>
                                </div>
                                <div class="w3-rest">
                                    <button class="w3-btn w3-border w3-white"><a href="">เลือกไฟล์</a></button>

                                </div>
                            </div>

                            <div class="w3-row w3-section">
                                <div class="w3-col" style="width:150px">
                                    <p>หมวดหมู่</p>
                                </div>
                                <div class="w3-rest">
                                    <select class="w3-select w3-border " name="หมวดหมู่สินค้า">
                                        <option value="" disabled selected>หมวดหมู่สินค้า</option>
                                        <option value="1">เค้กวันเกิด</option>
                                        <option value="2">เค้กชิ้น</option>
                                        <option value="3">เอแคลร์</option>
                                        <option value="3">ขนมปังกรอบ</option>
                                        <option value="3">คุกกี้</option>
                                    </select> </div>
                            </div>

                            <div class="w3-row w3-section">
                                <div class="w3-col" style="width:150px">
                                    <p>ชื่อสินค้า</p>
                                </div>
                                <div class="w3-rest">
                                    <input class="w3-input w3-border" name="เมนู" type="text" placeholder="ชื่อสินค้า">
                                </div>
                            </div>

                            <div class="w3-row w3-section">
                                <div class="w3-col" style="width:150px">
                                    <p>รายละเอียดสินค้า</p>
                                </div>
                                <div class="w3-rest">
                                    <input class="w3-input w3-border" name="รายละเอียดสินค้า" type="text" placeholder="รายละเอียดสินค้า">
                                </div>
                            </div>

                            <div class="w3-row w3-section">
                                <div class="w3-col" style="width:150px">
                                    <p>สถานะ</p>
                                </div>
                                <div class="w3-rest">
                                    <select class="w3-select w3-border " name="สถานะ">
                                        <option value="" disabled selected>สถานะ</option>
                                        <option value="1">จำหน่าย</option>
                                        <option value="2">ไม่จำหน่าย</option>

                                    </select>
                                </div>
                            </div>

                            <div class="w3-row w3-section">
                                <div class="w3-col" style="width:150px">
                                    <p>ราคา</p>
                                </div>
                                <div class="w3-rest">
                                    <input class="w3-input w3-border" name="ราคา" type="text" placeholder="ราคา">
                                </div>
                            </div>
                            <div class="w3-center">
                                <button class="w3-btn w3-theme-l3 w3-center w3-round-large" style="margin-top:20px;margin-bottom:10px;">ยืนยัน</button>
                                <button class="w3-btn w3-red w3-center w3-round-large" style="margin-top:20px;margin-bottom:10px;"><a
                                        href="admin_product.php">ยกเลิก</a></button>
                            </div>


                        </fieldset>
                    </form>
                </div>
            </div>








    </body>
</body>

</html>