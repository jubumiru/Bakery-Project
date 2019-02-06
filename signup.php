<!-- เก็บข้อมูลเข้าฐานข้อมูล -->
<?php
include 'connect.php';

  if(isset($_POST["submit"])){

    $Username = $_POST["Username"];
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

<!-- หน้าเว็บ html -->
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
    <title>Sign up</title>
    <style>
    </style>
</head>

<body>
    <!-- Navbar  -->
    <?php include "php/navbar.php";?>

    <!-- SignUp Form -->
    <div class="w3-container w3-padding-64">
        <div class="w3-content w3-border w3-card w3-white w3-container" style="width:30%;">
            <h1 class="w3-center w3-text-pink" style="margin-bottom:30px">สมัครสมาชิก</h1>
            <form action="signup.php" method="post">
            <form class="w3-container w3-row-padding" action="">
                <div style="text-align:center;">
                    <p>
                        <label class="w3-text-pink"><b>Username</b></label>
                        <input class="w3-input w3-border w3-sand" type="text" name="Username"></p>

                    <p>
                        <label class="w3-text-pink"><b>Password</b></label>
                        <input class="w3-input w3-border w3-sand" type="password" name="Password"></p>

                    <p>
                        <label class="w3-text-pink"><b>ชื่อ</b></label>
                        <input class="w3-input w3-border w3-sand"  type="text" name="Member_Name"></p>

                    <p>
                        <label class="w3-text-pink"><b>นามสกุล</b></label>
                        <input class="w3-input w3-border w3-sand"  type="text" name="Member_Lastname"></p>

                    <p>
                        <label class="w3-text-pink"><b>เบอร์โทรศัพท์</b></label>
                        <input class="w3-input w3-border w3-sand"  type="text" maxlength="10" name="Member_Phone"></p>

                    <p>
                        <label class="w3-text-pink"><b>E-mail</b></label>
                        <input class="w3-input w3-border w3-sand"  type="email" name="Member_Email"></p>
                </div>


                <div class="w3-center">
                    <button class="w3-btn w3-center w3-pink" style="margin-top:20px;margin-bottom:10px;" type="submit" name="submit">สมัครสมาชิก</button>
                    <button class="w3-btn w3-pale-red w3-center" style="margin-top:20px;margin-bottom:10px;"><a href="index.php">ยกเลิก</a></button>
                </div>
            </form>
            </form>
        </div>
    </div>


</body>

</html>