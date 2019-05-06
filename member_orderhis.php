<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-pink.css">
    <title>Member</title>
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
    <?php include "selectnav.php" ?>

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
                        <legend>ประวัติการสั่งซื้อ</legend>
                            <div class="w3-row">
                                <div class="w3-">
                                    <table class="w3-table-all">
                                        <tr class="w3-padding w3-theme-l3">
                                            <th class="">เลขออเดอร์</th>
                                            <th class="">วันที่สั่งซื้อ</th>
                                            <th class="">สถานะออเดอร์</th>
                                            <th class="">สินค้า</th>
                                            <th class="">จำนวน</th>
                                        </tr>
                                        <tr>
                                            <td class="">35</td>
                                            <td class="">2019-05-07</td>
                                            <td class="">จัดส่งเรียบร้อยแล้ว</td>
                                            <td>เค้กชิ้นสตรอว์เบอรี่</td>
                                            <td>10</td>
                                        </tr>   
                                    </table>
                                 </div>
                            </div>
                    </fieldset>
                </form>
        </div>
    </div>
    
</body>
</html>