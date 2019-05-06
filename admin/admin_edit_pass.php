<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">
    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-pink.css">
    <title>Admin</title>
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
        alert('คุณใส่ password ไม่ตรงกัน');
        document.ChangePass.pass1.focus();     
        return false;
    }
    return true;
    }

    </script>
</head>
   
<body>
    <!-- navbar -->
    <?php include "navbara.php";
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
                    <a href="admin_edit_pass.php" class="w3-bar-item w3-button w3-border">เปลี่ยนรหัสผ่าน</a>
                    <a href="admin_product.php" class="w3-bar-item w3-button w3-border">แก้ไขสินค้า</a>
                    <a href="admin_order.php" class="w3-bar-item w3-button w3-border">รายการสั่งซื้อ</a>
                    <a href="admin_report.php" class="w3-bar-item w3-button w3-border">รายงานการขาย</a>
                </div>
            </div>

            <!-- Right Panel -->
            <div class="w3-col m8 w3-margin-top w3-margin-left">
                <form method="post" onsubmit="return check()" name="ChangePass">
                    <fieldset>
                        <legend>แก้ไขรหัสผ่าน</legend>
                        <div class="w3-row" style="text-align:center;">
                            <div style="margin-left:150px; margin-right:150px;">
                                <label >Password</label>
                                <center><input class="w3-input w3-border" type="password" style="width:50%;" name="pass1"></center>

                                <label>ยืนยัน Password</label>
                                <center><input class="w3-input w3-border" type="password" style="width:50%;" name="pass2"></center>
                                <button class="w3-btn w3-theme-l3 w3-center w3-round-large" style="margin-top:20px;margin-bottom:10px;" name="changepass">ยืนยัน</button>
                            </div>

                        </div>
                    </fieldset>
                </form>
            </div>
        </div>



</body>

</html>