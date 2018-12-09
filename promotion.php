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
    <title>Promotion</title>
    <style>
    </style>
</head>

<body>
    <!-- Navbar  -->
    <div class="w3-row" style="text-align:center;">
    <a href="index.php">
        <img src="img/logo.png" alt="taewlogo" style="width:260px;height:240px;"></a>
</div>
<!-- มุมขวาบนของหน้าเว็บ -->
<div class="w3-text-blue" style="text-align:right;padding-right:190px;">
    <a href="signup.php">สมัครสมาชิก</a> ||
    <a href="Login.php">เข้าสู่ระบบ</a>
</div>

<!-- navbar -->
<div class="w3-container" style="margin-top:20px;text-align:center;">
    <div class="w3-bar">
        <div>
            <a href="index.php" class="w3-button w3-hide-small w3-theme">หน้าแรก</a>
            <a href="product.php" class="w3-button w3-hide-small w3-theme">สินค้าของเรา</a>
            <a href="promotion.php" class="w3-button w3-hide-small w3-theme">โปรโมชั่น</a>
            <a href="login1.php" class="w3-button w3-hide-small w3-theme">ตะกร้าสินค้า</a>
            <a href="payment.php" class="w3-button w3-hide-small w3-theme">แจ้งชำระเงิน</a>
            <a href="contact.php" class="w3-button w3-hide-small w3-theme">ติดต่อเรา</a>
            <a href="javascript:void(0)" class="w3-bar w3-button w3-left w3-hide-large w3-hide-medium w3-theme" onclick="w3_open()">
                <i class="fa fa-bars"></i>
                </a>
        </div>
    </div>
</div> 
    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-theme w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">หน้าแรก</a>
  <a href="product.php" onclick="w3_close()" class="w3-bar-item w3-button">สินค้าของเรา</a>
  <a href="promotion.php" onclick="w3_close()" class="w3-bar-item w3-button">โปรโมชัน</a>
  <a href="login1.php" onclick="w3_close()" class="w3-bar-item w3-button">สั่งซื้อสินค้า</a>
  <a href="payment.php" onclick="w3_close()" class="w3-bar-item w3-button">แจ้งชำระเงิน</a>
  <a href="contact.php" onclick="w3_close()" class="w3-bar-item w3-button">ติดต่อเรา</a>
</nav>
<br>

<!-- JS สำหรับปิดบาร์เล็ก -->
    <script>
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
  <!-- ตาราง -->
  <div class="w3-row-padding w3-container w3-card w3-center" style="margin-top:20px; margin-left:300px; margin-right:300px ">
    <div class="w3-col s5 w3-center" style="margin-top:20px; margin-bottom:20px;">
      <img src="img/pro1.jpg" alt="motherday" style="width:260px;height:240px;"></a>
    </div>
    <div class="w3-col s5 w3-center w3-card w3-theme-d3" style="margin-top:20px; margin-left:50px; margin-right:50px">
      <p>โปรโมชันสุขสันต์วันแม่</p>
    </div>
    <div class="w3-col  s5 w3-center w3-theme-l2" style="margin-top:20px; margin-left:50px; margin-right:50px">
      <p>พิเศษ !! <br> ช่วงวันแม่นี้ ลดราคาสำหรับเค้กปอนด์ 20% </p>
    </div>
    <div class="w3-col  s5 w3-center w3-theme-l2" style="margin-top:20px; margin-left:50px; margin-right:50px">
      <p>ระยะเวลา <br> 10 สิงหาคม 2561 - 15 สิงหาคม 2561</p>
    </div>

  </div>
  </div>


</body>

</html>