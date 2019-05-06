<?php 
include '../connect.php';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$select = mysqli_query($conn,"SELECT * FROM product WHERE id = '".$id."' ");
$row = mysqli_fetch_assoc($select);
if(isset($_POST['update'])){

    $old_image= $row['image'];
    $pname = $_POST["Product_Name"];
    $price = $_POST["Product_Price"];
    $detail = $_POST["Product_Detail"];
    $category = $_POST["Product_Category"];
    $status = $_POST["Product_Status"];


    if(isset($_FILES['profile']['name']) && ($_FILES['profile']['name']!="")){
        $size = $_FILES['profile']['size'];
        $temp = $_FILES['profile']['tmp_name'];
        $type = $_FILES['profile']['type'];
        $file_name = $_FILES['profile']['name'];
        //1st delete old file
        unlink("../uploads/$old_image");
        //new file add to dir
        move_uploaded_file($temp,"../uploads/$file_name");
    } else {
        $file_name = $old_image;
    }

    $update = mysqli_query($conn,"UPDATE `product` set `image`='".$old_image."',`Product_Name`='".$pname."',`Product_Price`='".$price."',`Product_Detail`='".$detail."',`Product_Category`='".$category."',`Product_Status`='".$status."' WHERE `id` = '".$id."'");

if($update){
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
            <b> คุณได้แก้ไขสินค้าสำเร็จ </b>
          </label>
        </p>
        <div class="w3-container w3-section w3-right">
          <button onclick="document.getElementById(\'result-modal\').style.display=\'none\'" class="w3-button w3-pink" "><a href="admin_product.php">OK</button>
        </div>
      </div>
    </div>
    </div>
    ';
}else {
    echo "<script>alert('data was not update')</script>";
}
}
?>

<!-- หน้า html -->
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
                        <a href="admin_product.php" class="w3-bar-item w3-button w3-border">แก้ไขสินค้า</a>                        
                        <a href="admin_order.php" class="w3-bar-item w3-button w3-border">รายการสั่งซื้อ</a>
                        <a href="admin_report.php" class="w3-bar-item w3-button w3-border">รายงานการขาย</a>
                    </div>
                </div>

                <!-- Right Panel -->
                <div class="w3-col m8 w3-margin-top w3-margin-left">
                    <form class="w3-container" action="" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <legend>แก้ไขสินค้า</legend>

                            <div class="w3-row w3-section">
                                <div class="w3-col" style="width:150px">
                                    <p>รูปภาพ</p>
                                </div>
                                <div class="w3-rest">
                                    <p class="w3-center-align">
                                        <input class="w3-border" style="width:300px;" name="fileToUpload" type="file" accept="image/่*">
                                </div>
                            </div>

                            <div class="w3-row w3-section">
                                <div class="w3-col" style="width:150px">
                                    <p>ชื่อสินค้า</p>
                                </div>
                                <div class="w3-rest">
                                    <input class="w3-input w3-border" name="Product_Name" type="text" value="<?php echo $row['Product_Name'] ?>">
                                </div>
                            </div>

                            <div class="w3-row w3-section">
                                <div class="w3-col" style="width:150px">
                                    <p>รายละเอียดสินค้า</p>
                                </div>
                                <div class="w3-rest">
                                    <input class="w3-input w3-border" name="Product_Detail" type="text" value="<?php echo $row['Product_Detail'] ?>">
                                </div>
                            </div>

                            <div class="w3-row w3-section">
                                <div class="w3-col" style="width:150px">
                                    <p>ราคา</p>
                                </div>
                                <div class="w3-rest">
                                    <input class="w3-input w3-border" name="Product_Price" type="text"  value="<?php echo $row['Product_Price'] ?>">
                                </div>
                            </div>

                            <div class="w3-row w3-section">
                                <div class="w3-col" style="width:150px">
                                    <p>หมวดหมู่</p>
                                </div>
                                <div class="w3-rest">
                                    <select class="w3-select w3-border " name="Product_Category" value="<?php echo $row['Product_Category'] ?>">
                                        <option value="" disabled selected>หมวดหมู่สินค้า</option>
                                        <option value="เค้กวันเกิด">เค้กวันเกิด</option>
                                        <option value="เค้กชิ้น">เค้กชิ้น</option>
                                        <option value="เอแคลร์">เอแคลร์</option>
                                        <option value="ขนมปังกรอบ">ขนมปังกรอบ</option>
                                        <option value="คุ้กกี้">คุกกี้</option>
                                    </select> </div>
                            </div>

                            <div class="w3-row w3-section">
                                <div class="w3-col" style="width:150px">
                                    <p>สถานะ</p>
                                </div>
                                <div class="w3-rest">
                                    <select class="w3-select w3-border " name="Product_Status" value="<?php echo $row['Product_Status'] ?>">
                                        <option value="" disabled selected>สถานะ</option>
                                        <option value="1">จำหน่าย</option>
                                        <option value="2">ไม่จำหน่าย</option>

                                    </select>
                                </div>
                            </div>

                            <div class="w3-center">
                                <button class="w3-btn w3-theme-l3 w3-center w3-round-large"
                                    style="margin-top:20px;margin-bottom:10px;" type="submit"
                                    name="update">แก้ไขข้อมูล</button>
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