<!-- เก็บข้อมูลเข้าฐานข้อมูล -->
    <?php
        require 'connect.php';
    ?>

<!-- หน้าเว็บ html -->
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
    <title>Sign up</title>
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
    <!-- Navbar  -->
    <?php include('selectnav.php');?>

    <!-- SignUp Form -->
    <div class="w3-container w3-padding-64">
        <div class="w3-content w3-border w3-card w3-white w3-container" style="width:30%;">
            <h1 class="w3-center w3-text-pink" style="margin-bottom:30px">สมัครสมาชิก</h1>
            <form class="w3-container w3-row-padding" action="" method="post">
                <div style="text-align:center;">
                    <p>
                        <label class="w3-text-pink"><b>Username</b></label>
                        <input class="w3-input w3-border w3-sand" type="text" name="username" required></p>

                    <p>
                        <label class="w3-text-pink"><b>Password</b></label>
                        <input class="w3-input w3-border w3-sand" type="password" name="password"></p>

                    <p>
                        <label class="w3-text-pink"><b>ชื่อ</b></label>
                        <input class="w3-input w3-border w3-sand" type="text" name="fname"></p>

                    <p>
                        <label class="w3-text-pink"><b>นามสกุล</b></label>
                        <input class="w3-input w3-border w3-sand" type="text" name="lname"></p>

                    <p>
                        <label class="w3-text-pink"><b>เบอร์โทรศัพท์</b></label>
                        <input class="w3-input w3-border w3-sand" type="text" maxlength="10" name="tel"></p>

                    <p>
                        <label class="w3-text-pink"><b>E-mail</b></label>
                        <input class="w3-input w3-border w3-sand" type="email" name="email"></p>
                </div>


                <div class="w3-center">
                    <button class="w3-btn w3-center w3-pink" style="margin-top:20px;margin-bottom:10px;" type="submit"
                        name="submit">สมัครสมาชิก</button>
                    <button class="w3-btn w3-pale-red w3-center" style="margin-top:20px;margin-bottom:10px;"><a href="index.php">ยกเลิก</a></button>
                </div>
            </form>
        </div>
    </div>

<?php 
include('connect.php');
if(isset($_POST['submit']))
{   
    $username=$_POST['username'];
    $password=$_POST['password'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $tel=$_POST['tel'];
    $email=$_POST['email'];

        //updating the table
        $query = "INSERT INTO `member` (username, password, member_name, member_lastname, member_phone, member_email) 
                VALUES ('$username','$password','$fname','$lname','$tel','$email')";

        $result = mysqli_query($conn,$query);
        
        if($result){
            echo '<script language="javascript">';
            echo 'alert("สมัครสมาชิกเรียบร้อย")';
            echo '</script>';
            header("Location: ../Login.php");
        }
        
    }


?>


</body>

</html>