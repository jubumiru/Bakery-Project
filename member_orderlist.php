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

        <!-- Content -->
        <div class="w3-content">
            <div>
            </i><h5 style="text-align:center;margin-top:20px;"><i class="fa fa-bars"></i> รายละเอียดการสั่งซื้อสินค้า</h5>

                <table class="w3-table-all" style="margin-top:20px;">
                    <tr class="w3-padding">
                        <th class=>รายละเอียดสินค้า</th>
                        <th class=>จำนวน</th>
                        <th class=>ราคา</th>
                    </tr>
                    <tr>
                        <td class=>กก</td>
                        <td class=>กกก</td>
                        <td class=>กกก</td>
                    </tr>
                </table>
                <form action="">
                    <fieldset style="margin-top:20px;">
                        <legend>กรอกรายละเอียดเพิ่มเติม</legend>
                        <div class="w3-row">
                            <div class="w3-col m4">
                                <p></p>
                            </div>
                            <div class="w3-col m4">
                                <p class="">วันที่ต้องการจัดส่ง : <input type="date"> <i class="fa fa-calendar"></i></>
                                </p>
                                <p class="">ที่อยู่ในการจัดส่ง : <input type="radio"> ที่อยู่ 1</p>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <div style="text-align:center;padding:10px;">
                    <a href="member_cart.php">ย้อนกลับ</a> ||
                    <a href="" style="text-decoration:none;" class="w3-button w3-round-large w3-teal">ยืนยัน</a>

                </div>
            </div>
        </div>

    </body>

</html>