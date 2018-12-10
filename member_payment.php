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
</head>

<body>

    <body>
        <!-- Navbar -->
        <?php include "php/navbarm.php" ?>

        <!-- กล่องรายละเอียดชำระเงิน         -->
        <div class="w3-row-padding w3-container w3-card w3-center w3-white" style="margin-top:20px; margin-left:300px; margin-right:300px ">
            <p> ธนาคารไทยพานิชย์ เลขที่บัญชี : 123-4-56789-0 </p><br>
            <p>หลักฐานการชำระเงิน</p><br>
            <p class="w3-center-align"><input class=" w3-border  " style="width:300px;" name="imageUpload" type="file" required>
            <div class="w3-center">
                <a class="w3-btn w3-theme w3-center w3-round-large" style="margin-top:20px;margin-bottom:10px;">ยืนยันการชำระเงิน</a> ||
                <a href="index.php" class="w3-center w3-round-large">ยกเลิก</a>
            </div>
        </div>
    </body>
</body>

</html>