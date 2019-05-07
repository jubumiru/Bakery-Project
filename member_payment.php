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
    <title>Member</title>

    <?php include 'selectnav.php';
       $id = isset($_POST['Order_ID']) ? $_POST['Order_ID'] : '';
       $select = mysqli_query($conn,"SELECT * FROM `order` WHERE `Order_ID` = '".$id."'");
       $row = mysqli_fetch_assoc($select);
       
       if(isset($_POST['update'])){
         
         
         $old_image= $row['Payment_Image'];
         if(isset($_FILES['fileToUpload']['name']) && ($_FILES['fileToUpload']['name']!="")){
             $size = $_FILES['fileToUpload']['size'];
             $temp = $_FILES['fileToUpload']['tmp_name'];
             $type = $_FILES['fileToUpload']['type'];
             $file_name = $_FILES['fileToUpload']['name'];
             //1st delete old file
             @unlink("/payment/$old_image");
             //new file add to dir
             @move_uploaded_file($temp,"/payment/$file_name");
         } else {
             $file_name = $old_image;
         }
       
         $update = mysqli_query($conn,"UPDATE `order` set `Payment_Image`='".$file_name."' , `Order_Status` = 'ชำระเงินแล้ว' WHERE `Order_ID` = '".$id."'");
       
       
         // $id = 1;
       if($update){
         echo "<script>";
         echo "alert(\"อัพโหลดสลิปเรียบร้อย\");";
         
         echo "window.location = 'index.php';"; //ไปหน้าเเรก
         echo "</script>";
       }else {
       
         echo "<script>alert('อัพโหลดสลิปไม่สำเร็จ')</script>";
       }
       }
       
       
       ?>
</head>


    <body>
        <!-- Navbar -->

        <!-- กล่องรายละเอียดชำระเงิน         -->
        <form action="member_payment.php" method="POST" enctype="multipart/form-data" name="form1">
        <div class="w3-row-padding w3-container w3-card w3-center w3-white" style="margin-top:20px; margin-left:300px; margin-right:300px ">
            <p> ธนาคารไทยพานิชย์ เลขที่บัญชี : 123-4-56789-0 </p><br>
            <input type="hidden" value="<?php echo $_GET['id'];?>" name="Order_ID">
            <p>หลักฐานการชำระเงิน</p><br>
            <button class="w3-btn w3-border"><input class="w3-border" style="width:300px;" name="fileToUpload" type="file"
                                            accept="image/่*" required></button><br>
            <div class="w3-center">
                <button class="w3-btn w3-theme w3-center w3-round-large" style="margin-top:20px;margin-bottom:10px;" name="update" type="submit">ยืนยันการชำระเงิน</button>
                <button class="w3-btn w3-theme w3-center w3-round-large" style="margin-top:20px;margin-bottom:10px;"><a
                        href="index.php">ยกเลิก</a></button>
            </div>
        </div>
        </form>
    </body>


</html>