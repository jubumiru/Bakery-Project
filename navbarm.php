<?php
    $query = "SELECT * FROM `member` WHERE member_id = '".$_SESSION['UserID']."'";
    $objQuery = mysqli_query($conn, $query);
    $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
?>

<div class="w3-row" style="text-align:center;">
    <a href="index.php">
        <img src="img/logo.png" alt="taewlogo" style="width:260px;height:240px;"></a>
</div>
<!-- มุมขวาบนของหน้าเว็บ -->
<div class="w3-text-blue" style="text-align:right;padding-right:190px;">
    <p class="w3-text-black">สวัสดีคุณ<?php echo $objResult["member_name"]; ?> </p>
    <a href="member_detail.php">ข้อมูลผู้ใช้</a> ||
    <a href="logout.php" onclick="clearLocal()">ออกจากระบบ</a> 
</div>

<!-- navbar -->
<div class="w3-container" style="margin-top:20px;text-align:center;">
    <div class="w3-bar">
        <div>
            <a href="index.php" class="w3-button w3-hide-small w3-theme">หน้าแรก</a>
            <a href="product.php" class="w3-button w3-hide-small w3-theme">สินค้าของเรา</a>
            <a href="bestsell.php" class="w3-button w3-hide-small w3-theme">สินค้าขายดี</a>
            <a href="member_cart.php" class="w3-button w3-hide-small w3-theme">ตะกร้าสินค้า</a>
            <a href="payment.php" class="w3-button w3-hide-small w3-theme">แจ้งชำระเงิน</a>
            <a href="contact.php" class="w3-button w3-hide-small w3-theme">ติดต่อเรา</a>
            <a href="javascript:void(0)" class="w3-bar w3-button w3-left w3-hide-large w3-hide-medium w3-theme" onclick="w3_open()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
</div>
<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-theme w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none"
    id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">หน้าแรก</a>
    <a href="product.php" onclick="w3_close()" class="w3-bar-item w3-button">สินค้าของเรา</a>
    <a href="bestsell.php" onclick="w3_close()" class="w3-bar-item w3-button">โปรโมชัน</a>
    <a href="member_cart.php" onclick="w3_close()" class="w3-bar-item w3-button">ตะกร้าสินค้า</a>
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

    function clearLocal(){
        localStorage.clear();
    }
</script>