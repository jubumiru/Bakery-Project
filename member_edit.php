<!DOCTYPE html>
<html lang="en">
<?php
    include "selectnav.php";
    if(isset($_POST['update'])){
    
     $id = $_SESSION['UserID'];
     $name = $_POST['m_name'];
     $lname = $_POST['m_lname'];
     $tel = $_POST['m_tel'];
     $email = $_POST['m_email'];
     $update = mysqli_query($conn,"UPDATE member SET `member_name`='".$name."',`member_lastname`='".$lname."',`member_phone`='".$tel."',`member_email`='".$email."' WHERE member_id = '".$id."'");
     if($update){
        echo "<script>";
        echo "alert(\"แก้ไขข้อมูลส่วนตัวแล้ว\");";
        echo "window.location = 'member_detail.php';";
        echo "</script>";
     }else{
         
     }
    }
    ?>
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
                <form method="POST" action="">
                    <fieldset class="">
                        <legend>แก้ไขข้อมูลส่วนตัว</legend>
                            <div class="w3-row">
                                <div class="w3-col m8">
                                    <p class="w3-right-align">ชื่อ : <input type="text" name="m_name" value="<?php echo $objResult['member_name']?>"></input></p>
                                    <p class="w3-right-align">นามสกุล : <input type="text" name="m_lname" value="<?php echo $objResult['member_lastname']?>"></input></p>
                                    <p class="w3-right-align">เบอร์โทรศัพท์ : <input type="text" name="m_tel" value="<?php echo $objResult['member_phone']?>"></input></p>
                                    <p class="w3-right-align">E-mail : <input type="text" name="m_email" value="<?php echo $objResult['member_email']?>"></input></p>
                                 </div>
                            </div>
                            <div style="text-align:center;">
                                <a href="member_detail.php">ยกเลิก</a> ||
                                <button style="text-decoration:none;" class="w3-button w3-round-large w3-theme" name="update" type="submit">เปลี่ยนข้อมูลส่วนตัว</button>
                            </div>
                    </fieldset>
                </form>
        </div>
    </div>
</body>
</html>