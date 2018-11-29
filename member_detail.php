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
    <title>Member Detail</title>
</head>

<body>
    <!-- Navbar -->
    <?php include "php/navbar.php" ?>

    <!-- Left Panel -->
    <div class="w3-container" style="margin-left:170px;">
        <div class="w3-row">
            <div class="w3-col m2 w3-margin-top w3-white">
                <div class="w3-bar-block">
                    <a href="member_detail.php" class="w3-bar-item w3-button w3-border">ข้อมูลส่วนตัว</a>
                    <a href="member_orderhis.php" class="w3-bar-item w3-button w3-border">ประวัติการสั่งซื้อสินค้า</a>
                    <a href="member_address.php" class="w3-bar-item w3-button w3-border">ที่อยู่จัดส่ง</a>
                </div>
            </div>
    
    <!-- Right Panel -->
        <div class="w3-col m8 w3-margin-top w3-margin-left">
                <form>
                    <fieldset class="">
                        <legend>ข้อมูลสมาชิก</legend>
                            <div class="w3-row">
                                <div class="w3-col m2">
                                    <p class="w3-right-align">ชื่อ :</p>
                                    <p class="w3-right-align">นามสกุล :</p>
                                    <p class="w3-right-align">เบอร์โทรศัพท์ :</p>
                                    <p class="w3-right-align">E-mail :</p>
                                 </div>
                            </div>
                            <div style="text-align:center;">
                                <a href="member_edit.php">แก้ไขข้อมูลส่วนตัว</a> ||
                                <a href="member_edit_pass.php">เปลี่ยนรหัสผ่าน</a>

                            </div>
                    </fieldset>
                </form>
        </div>
    </div>
</body>

</html>