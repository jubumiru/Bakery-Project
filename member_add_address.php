<!-- เก็บข้อมูลเข้าฐานข้อมูล -->
<?php
include 'connect.php';

  if(isset($_POST["submit"])){

    $Number = $_POST["Username"];
    $Password = $_POST["Password"];
    $Name = $_POST["Member_Name"];
    $Lastname = $_POST["Member_Lastname"];
    $Tel = $_POST["Member_Phone"];
    $Email = $_POST["Member_Email"];

    $sql = "INSERT INTO `member` (`Username`, `Password`, `Member_Name`, `Member_Lastname`, `Member_Phone`, `Member_Email`) 
		VALUES ('$Username','$Password','$Name','$Lastname','$Tel','$Email')";

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
                                <p class="w3-right-align">บ้านเลขที่ : <input type="text"></input></p>
                                <p class="w3-right-align">ตำบล : <input type="text"></input></p>
                                <p class="w3-right-align">จังหวัด : <input type="text"></input></p>
                            </div>
                            <div class="w3-col m5">
                                <p class="w3-right-align">ถนน : <input type="text"></input></p>
                                <p class="w3-right-align">อำเภอ : <input type="text"></input></p>
                                <p class="w3-right-align">รหัสไปรษณีย์ : <input type="text"></input></p>
                            </div>
                        </div>
                        <div style="text-align:center;">
                            <a href="member_address.php">ยกเลิก</a> ||
                            <a href="" style="text-decoration:none;" class="w3-button w3-round-large w3-theme">ยืนยัน</a>
                        </div>
                </form>
        </div>
    </div>
</body>

</html>