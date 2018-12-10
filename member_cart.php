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
    <title>Member Cart</title>
</head>

<body>
    <!-- Navbar -->
    <?php include "php/navbarm.php" ?>

    <div class="w3-center w3-xlarge" style="margin-top:20px; "><i class="fa fa-shopping-cart"></i> ตะกร้าของฉัน</div>
    <div class="w3-row-padding w3-container  w3-center" style="margin-top:20px; margin-left:150px; margin-right:150px ">
        <!-- ตารางสินค้า     -->
        <table class="w3-table-all">
            <thead>
                <tr class="w3-theme-l3">
                    <th>รูปสินค้า</th>
                    <th>รายละเอียดสินค้า</th>
                    <th>จำนวน</th>
                    <th>ราคา</th>
                    <th>ลบ</th>
                </tr>
            </thead>
            <tr>
                <td> </td>
                <td> </td>
                <td><input type="number" min="1" max="50" name="amount"> ชิ้น</p>
                </td>
                <td></td>
                <td><button class="w3-btn w3-small w3-red" onclick="document.getElementById('premove').style.display='block'"><a
                            href=""><i class="fa fa-trash"></i></a></button></td>

            </tr>
        </table>
    </div>
    <div class="w3-center">
        <button class="w3-btn w3-theme-l3 w3-center w3-round-large" style="margin-top:20px;margin-bottom:10px;"><a href="member_orderlist.php"
                style="text-decoration:none;">ยืนยัน</a></button>
        <button class="w3-btn w3-red w3-center w3-round-large" style="margin-top:20px;margin-bottom:10px;"><a href="product.php">สั่งซื้อเพิ่ม</a></button>
    </div>

    <div id="premove" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom w3-padding-small w3-round" style="width:40%;">
            <div class="w3-container w3-white w3-center">
                <a href=""><i onclick="document.getElementById('premove').style.display='none'" class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i></a>
                <h2>ยืนยันการลบ ?</h2>
                <div class="w3-container w3-center w3-section ">
                    <a href="" class="w3-button w3-round w3-theme"><i class=""></i>ตกลง</a>
                    <a href="" class="w3-button w3-round w3-light-grey"><i class=""></i> ยกเลิก</a>
                </div>
                </div>
            </div>
        </div>

</body>

</html>