<!DOCTYPE html>
<html lang="en">
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
    <script language="javascript">
    function check(){
    if(document.ChangePass.pass1.value==""){
        alert('กรุณากรอก PASSWORD ');
        document.ChangePass.pass1.focus();
        return false;
    }else if(document.ChangePass.pass2.value==""){
        alert('กรุณากรอก PASSWORD ');
        document.ChangePass.pass2.focus();
        return false;
    }else if(document.ChangePass.pass1.value != document.ChangePass.pass2.value){
        alert('กรุณา PASSWORD ให้ตรงกัน');
        document.ChangePass.pass1.focus();     
        return false;
    }
    return true;
    }

    </script>
</head>
<body>
<body>
    <!-- Navbar -->
    <?php include('selectnav.php');
        if(isset($_POST['changepass'])){
        $sql = "UPDATE member SET password = '".$_POST['pass1']."' WHERE member_id = '".$_SESSION['UserID']."' ";
        $result = mysqli_query($conn,$sql);
        if($result){
        echo "<script>alert('เปลี่ยน Password เสร็จเรียบร้อบ')</script>";
        }else {}
    }
    ?>
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
                <form method="post" action="" onsubmit="return check()" name="ChangePass">
                    <fieldset class="">
                        <legend>เปลี่ยนรหัสผ่าน</legend>
                            <div class="w3-row">
                                <div class="w3-col m8">
                                    <p class="w3-right-align">Password : <input type="password" name="pass1" class="pass1" id="pass1"></input></p>
                                    <p class="w3-right-align">ยืนยัน Password : <input type="password" name="pass2" id="pass2"></input></p>
                                 </div>
                            </div>
                            <div style="text-align:center;">
                                <a href="member_detail.php">ยกเลิก</a> ||
                                <button href="" style="text-decoration:none;" class="w3-button w3-round-large w3-theme" name="changepass">เปลี่ยนรหัสผ่าน</button>

                            </div>
                    </fieldset>
                    
                </form>
        </div>
    </div>
</body>
</html>