<!-- เก็บข้อมูลเข้าฐานข้อมูล -->
<?php
include 'connect.php';

  if(isset($_POST["submit"])){

    $Address_Number = $_POST["Address_Number"];
    $Address_Street = $_POST["Address_Street"];
    $Address_Lane = $_POST["Address_Lane"];
    $Address_Tambon = $_POST["Address_Tambon"];
    $Address_District = $_POST["Address_District"];
    $Address_Province = $_POST["Address_Province"];
    $Postcode = $_POST["Postcode"];

    $sql = "INSERT INTO `address` (`Address_Number`, `Address_Street`, `Address_Lane`, `Address_Tambon`, `Address_District`, `Address_Province`, `Postcode`) 
		VALUES ('$Address_Number','$Address_Street','$Address_Lane','$Address_Tambon','$Address_District','$Address_Province','$Postcode')";

  $query = mysqli_query($conn,$sql);
  

	if($query) {
		echo "Record add successfully";
	}

	mysqli_close($conn);


  

  }
  ?>

<!-- หน้าเพจ html -->
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
    <?php include "php/navbarm.php" ?>

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
                    <fieldset >
                        <legend>เพิ่มที่อยู่ใหม่</legend>
                        <div class="w3-row">
                            <div class="w3-col m5">
                                <p class="w3-right-align">บ้านเลขที่ : <input type="text" name="Address_Number"></p>
                                <p class="w3-right-align">ตำบล : <input type="text" name="Address_Tambon"></p>
                                <p class="w3-right-align">จังหวัด : <input type="text" name="Address_Province"></p>
                            </div>
                            <div class="w3-col m5">
                                <p class="w3-right-align">ถนน : <input type="text" name="Address_Street"></p>
                                <p class="w3-right-align">อำเภอ : <input type="text" name="Address_District"></p>
                                <p class="w3-right-align">รหัสไปรษณีย์ : <input type="text" name="Address_Province"></p>
                            </div>
                        </div>
                        <div style="text-align:center;">
                            <a href="member_address.php">ยกเลิก</a> ||
                            <a href="" style="text-decoration:none;" class="w3-button w3-round-large w3-theme" type="submit" name="submit">ยืนยัน</a>
                        </div>
                </form>
        </div>
    </div>
</body>

</html>