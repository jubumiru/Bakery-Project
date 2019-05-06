<!DOCTYPE html>
<html lang="en">
<?php include "selectnav.php";

    $query = "SELECT * FROM address WHERE member_id='".$_SESSION['UserID']."'";
    $objQuery = mysqli_query($conn, $query);

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
                <form>
                    <fieldset class="">
                        <legend>ที่อยู่จัดส่ง</legend>
                        <?php foreach($objQuery as $key=>$objResult) {?>
                            <fieldset>

                                <legend>ที่อยู่ <?php echo $key + 1;?></legend>
                                <span style='padding-left:15px'><?php echo $objResult["Address_Number"];?></span>
                                <span style='padding-left:15px'><?php echo "" .$objResult["Address_Street"]; ?></span>
                                <span style='padding-left:15px'><?php echo "" .$objResult["Address_Tambon"]; ?></span><br>
                                <span style='padding-left:15px'><?php echo "".$objResult["Address_District"]; ?></span>
                                <span style='padding-left:15px'><?php echo "" .$objResult["Address_Province"]; ?></span> 
                                <span style='padding-left:15px'><?php echo $objResult["Postcode"]; ?></span>

                                <button class="w3-right w3-red"><i class="fa fa-trash" style="font-size:36px"></i></button>
                            </fieldset>    
                        <?php }?>

                            <?php
                            echo "<a href=\"member_add_address.php?id=".$_SESSION['UserID']."&action=edit\" class='w3-button w3-round-large w3-theme w3-margin w3-right'>เพิ่มที่อยู่ใหม่</a>"; ?>
                    </fieldset>
                </form>
        </div>
    </div>
</body>

</html>