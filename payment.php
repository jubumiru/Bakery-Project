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
    <title>Payment</title>
</head>
<body>
    <!-- Navbar  -->
    <?php include "php/navbarm.php";?>
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