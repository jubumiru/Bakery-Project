<!-- เก็บข้อมูลเข้าฐานข้อมูล -->
<?php include "selectnav.php";
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    if(isset($_POST['submit'])){
    $adnumber = $_POST['adnumber'];
    $adtambon = $_POST['adtambon'];
    $adprovince = $_POST['adprovince'];
    $adstreet = $_POST['adstreet'];
    $addistrict = $_POST['addistrict'];
    $adpostcode = $_POST['adpostcode'];
    
    $query = "INSERT INTO `address`(Address_Number, Address_Street,Address_Tambon, Address_District, Address_Province, Postcode, member_id) 
              VALUES ('$adnumber', '$adstreet', '$adtambon', '$addistrict', '$adprovince', '$adpostcode', '$id')";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "<script>";
        echo "alert(\"เพิ่มที่อยู่เรียบร้อยแล้ว\");";
        echo "window.location = 'member_address.php';";
        echo "</script>";
     }else{
         
     }
    }

?>

<!-- หน้าเพจ html -->
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
    <title>Member Detail</title>
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
                <form method="post">
                    <fieldset >
                        <legend>เพิ่มที่อยู่ใหม่</legend>
                        <div class="w3-row">
                            <div class="w3-col m5">
                                <p class="w3-right-align">บ้านเลขที่ : <input type="text" name="adnumber" required></p>
                                <p class="w3-right-align">ตำบล : <input type="text" name="adtambon" value="ต." required></p>
                                <p class="w3-right-align">จังหวัด : <input type="text" name="adprovince" value="จ." required></p>
                            </div>
                            <div class="w3-col m5">
                                <p class="w3-right-align">ถนน : <input type="text" name="adstreet" value="ถ." required></p>
                                <p class="w3-right-align">อำเภอ : <input type="text" name="addistrict" value="อ." required></p>
                                <p class="w3-right-align">รหัสไปรษณีย์ : <input type="text" name="adpostcode" required></p>
                            </div>
                        </div>
                        <div style="text-align:center;">
                            <a href="member_address.php">ยกเลิก</a> ||
                            <button href="" style="text-decoration:none;" class="w3-button w3-round-large w3-theme" type="submit" name="submit">ยืนยัน</button>
                        </div>
                </form>
        </div>
    </div>
</body>

</html>