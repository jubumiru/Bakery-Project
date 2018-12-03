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
        .w3-bar .w3-button {
            margin-right: 10px;
            width: 150px;
        }

        .footer {
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            text-align: center;
        }

        body {
            background-color: #ffe6cc;
        }
    </style>
</head>


<body>
    <div class="w3-row" style="text-align:center;">
        <a href="index.php">
            <img src="img/logo.png" alt="taewlogo" style="width:260px;height:240px;"></a>
    </div>
    <div class="w3-text-blue" style="text-align:right;padding-right:190px;">
        <a href="signup.php">สมัครสมาชิก</a> ||
        <a href="Login.php">เข้าสู่ระบบ</a>
    </div>
    <div class="w3-container" style="margin-top:20px;text-align:center;">
        <div class="w3-bar">
            <div>
                <a href="index.php" class="w3-button  w3-theme">หน้าแรก</a>
                <a href="product.php" class="w3-button  w3-theme">สินค้าของเรา</a>
                <a href="promotion.php" class="w3-button  w3-theme">โปรโมชั่น</a>
                <a href="login1.php" class="w3-button  w3-theme">สั่งซื้อสินค้า</a>
                <a href="" class="w3-button  w3-theme">แจ้งชำระเงิน</a>
                <a href="contact.php" class="w3-button  w3-theme">ติดต่อเรา</a>
            </div>
        </div>
    </div>
    <div class="w3-row-padding w3-container w3-card w3-center" style="margin-top:20px; margin-left:300px; margin-right:300px ">
        <table class="w3-table-all">
            <thead>
                <tr class="w3-theme-l3">
                    <th>หมายเลขออเดอร์</th>
                    <th>วันที่ต้องการรับ</th>
                    <th>ราคา</th>
                    <th>สถานะ</th>
                    <th>แจ้งชำระเงิน</th>
                </tr>
            </thead>
            <tr>
                <td>123456789</td>
                <td>10/10/2562</td>
                <td>50 บาท</td>
                <td>ยังไม่ได้ชำระเงิน</td>
                <td><button class="w3-btn w3-small w3-red"><a href="member_payment.php">ชำระเงิน</a></button></td>
            </tr>
        </table>
    </div>
    </div>

</body>

</html>