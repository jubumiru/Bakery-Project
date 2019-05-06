<!-- เก็บข้อมูลเข้าฐานข้อมูล -->
<?php
include '../connect.php';

  if(isset($_POST["submit"])){

    $img = $_FILES["fileToUpload"]["name"];
    $pname = $_POST["Product_Name"];
    $price = $_POST["Product_Price"];
    $detail = $_POST["Product_Detail"];
    $category = $_POST["Product_Category"];
    $status = $_POST["Product_Status"];
    


    $sql = "INSERT INTO `product` (`image`,`Product_Name`,`Product_Price`, `Product_Detail`, `Product_Category`, `Product_Status` ) 
    VALUES ('$img','$pname','$price','$detail','$category','$status')";

  $query = mysqli_query($conn,$sql);
  

	if($query) {
		echo '
        <div id="result-modal" class="w3-modal" style="display:block">
        <div class="w3-modal-content w3-card-4" style="width:500px">
          <header class="w3-container ">
            <span onclick="document.getElementById(\'result-modal\').style.display=\'none\'" class="w3-button w3-display-topright w3-hover-red">&times;</span>
            <h2>: ))</h2>
          </header>
          <div class="w3-container w3-section">
            <p>
              <label class="w3-text-black w3-opacity">
                <b> คุณได้เพิ่มสินค้าสำเร็จ </b>
              </label>
            </p>
            <div class="w3-container w3-section w3-right">
              <button onclick="document.getElementById(\'result-modal\').style.display=\'none\'" class="w3-button w3-pink"><a href="admin_product.php">OK</button>
            </div>
          </div>
        </div>
        </div>
        ';
	}else {
        echo "faild";
    }

// อัพโหลดรูปภาพ
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        $uploadOk = 1;
    } else {
        
        $uploadOk = 0;
    }
}

  }
  ?>

<!-- หน้าเว็บ html -->
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
</head>

<body>

    <body>
        <!-- Navbar -->
        <?php include "navbara.php" ?>

        <!-- Left Panel -->
        <div class="w3-container" style="margin-left:170px;">
            <div class="w3-row">
                <div class="w3-col m2 w3-margin-top w3-white">
                    <div class="w3-bar-block">
                        <a href="admin_edit_pass.php" class="w3-bar-item w3-button w3-border">เปลี่ยนรหัสผ่าน</a>
                        <a href="admin_product_edit.php" class="w3-bar-item w3-button w3-border">แก้ไขสินค้า</a>                        
                        <a href="admin_order.php" class="w3-bar-item w3-button w3-border">รายการสั่งซื้อ</a>
                        <a href="admin_report.php" class="w3-bar-item w3-button w3-border">รายงานการขาย</a>
                    </div>
                </div>

                <!-- Right Panel -->
                <div class="w3-col m8 w3-margin-top w3-margin-left">
                    <form class="w3-container" action="admin_product_add.php" method="post"
                        enctype="multipart/form-data" name="form1">
                        <fieldset>
                            <legend>เพิ่มสินค้า</legend>

                            <div class="w3-row w3-section">
                                <div class="w3-col" style="width:150px">
                                    <p>รูปภาพ</p>
                                </div>
                                <div class="w3-rest">
                                    <p class="w3-center-align">
                                        <input class="w3-border" style="width:300px;" name="fileToUpload" type="file"
                                            accept="image/่*" required>
                                </div>
                            </div>

                            <div class="w3-row w3-section">
                                <div class="w3-col" style="width:150px">
                                    <p>ชื่อสินค้า</p>
                                </div>
                                <div class="w3-rest">
                                    <input class="w3-input w3-border" name="Product_Name" type="text"
                                        placeholder="ชื่อสินค้า" required >
                                </div>
                            </div>

                            <div class="w3-row w3-section">
                                <div class="w3-col" style="width:150px">
                                    <p>รายละเอียดสินค้า</p>
                                </div>
                                <div class="w3-rest">
                                    <input class="w3-input w3-border" name="Product_Detail" type="text"
                                        placeholder="รายละเอียดสินค้า" required>
                                </div>
                            </div>

                            <div class="w3-row w3-section">
                                <div class="w3-col" style="width:150px">
                                    <p>ราคา</p>
                                </div>
                                <div class="w3-rest">
                                    <input class="w3-input w3-border" name="Product_Price" type="text"
                                        placeholder="ราคา" required>
                                </div>
                            </div>

                            <div class="w3-row w3-section">
                                <div class="w3-col" style="width:150px">
                                    <p>หมวดหมู่</p>
                                </div>
                                <div class="w3-rest">
                                    <select class="w3-select w3-border " name="Product_Category">
                                        <option value="" disabled selected>หมวดหมู่สินค้า</option>
                                        <option value="เค้กวันเกิด">เค้กวันเกิด</option>
                                        <option value="เค้กชิ้น">เค้กชิ้น</option>
                                        <option value="เอแคลร์">เอแคลร์</option>
                                        <option value="ขนมปังกรอบ">ขนมปังกรอบ</option>
                                        <option value="คุ้กกี้">คุ้กกี้</option>
                                    </select> </div>
                            </div>

                            <div class="w3-row w3-section">
                                <div class="w3-col" style="width:150px">
                                    <p>สถานะ</p>
                                </div>
                                <div class="w3-rest">
                                    <select class="w3-select w3-border " name="Product_Status">
                                        <option value="" disabled selected>สถานะ</option>
                                        <option value="1">จำหน่าย</option>
                                        <option value="2">ไม่จำหน่าย</option>

                                    </select>
                                </div>
                            </div>

                            <div class="w3-center">
                                <button class="w3-btn w3-theme-l3 w3-center w3-round-large"
                                    style="margin-top:20px;margin-bottom:10px;" type="submit"
                                    name="submit">เพิ่มข้อมูล</button>
                                <button type="submit" class="w3-btn w3-red w3-center w3-round-large"
                                    style="margin-top:20px;margin-bottom:10px;"><a
                                        href="admin_product.php">ยกเลิก</a></button>
                            </div>


                        </fieldset>
                    </form>
                </div>
            </div>








    </body>
</body>

</html>