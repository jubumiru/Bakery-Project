<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-pink.css">
    <title>Mrs. Taew Bakery</title>
    <style>
        .w3-bar .w3-button{
        margin-right:10px;
        width:150px;
    }
    .footer {
    left: 0;
    bottom: 0;
    width: 100%;
    color: white;
    text-align: center;
    }
    body{
        background-color:  #ffe6cc;

    }

    .detail{
        margin-left:25%;
        margin-right:25%;
    }

    @media(max-width:768px){
        .detail{
        margin-left:10%;
        margin-right:10%;
    }
    }


    </style>
</head>

<body>
    <div class="w3-row" style="text-align:center;">
        <a href="index.php">
            <img src="img/logo.png" alt="taewlogo" style="width:260px;height:240px;"></a>
    </div>
    <div class="w3-text-blue" style="text-align:right;padding-right:190px;">
        <!-- <a href="admin_edit_pass.php">จัดการร้าน</a> || -->
        <a href="">ออกจากระบบ</a>
    </div>
    <div class="w3-container" style="margin-top:20px;text-align:center;">
        <div class="w3-bar">
            <div>
                <a href="index.php" class="w3-button  w3-theme">หน้าแรก</a>
                <a href="product.php" class="w3-button  w3-theme">สินค้าของเรา</a>
                <a href="promotion.php" class="w3-button  w3-theme">โปรโมชั่น</a>
                <a href="login1.php" class="w3-button  w3-theme">สั่งซื้อสินค้า</a>
                <a href="payment.php" class="w3-button  w3-theme">แจ้งชำระเงิน</a>
                <a href="contact.php" class="w3-button  w3-theme">ติดต่อเรา</a>
            </div>
        </div>

        <div class="w3-center w3-xlarge"style="margin-top:20px; "><i class="fa fa-shopping-cart"></i> ตะกร้าของฉัน</div>
        <div class="w3-row-padding w3-container  w3-center" style="margin-top:20px; margin-left:150px; margin-right:150px ">
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
                <td><input type="number" min="1" max="50" name="amount"> ชิ้น</p>  </td>
                <td></td>
                <td><button class="w3-btn w3-small w3-red"><a href="member_payment.php"><i class="fa fa-trash"></i></a></button></td>
            </tr>
        </table>
    </div>
                        <div class="w3-center">
                            <button class="w3-btn w3-theme-l3 w3-center w3-round-large" style="margin-top:20px;margin-bottom:10px;"><a href="member_orderlist.php" style="text-decoration:none;">ยืนยัน</a></button>
                            <button class="w3-btn w3-red w3-center w3-round-large" style="margin-top:20px;margin-bottom:10px;"><a href="product.php">สั่งซื้อเพิ่ม</a></button>
                        </div>


    </body>
</html>