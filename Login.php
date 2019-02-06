<?php
 include "connect.php";
    $Username = $_REQUEST['usn'];
    $Password = md5($_REQUEST['pss']);
    $strSQL = "SELECT * FROM User Where Username='".$Username."' and Password='".$Password."' ";
    $objQuery = mysql_query($strSQL);
    $objResult = mysql_fetch_array($objQuery);
    if(!objResult)
    {
        echo "username or password incorrect";
    }
    else
    {
        $_SESSION["Member_ID"] = $objResult["Member_ID"];
        
        session_write_close();
        header("location:index.php");
    }
    mysql_close();
?>
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
    <title>Mrs. Taew Bakery</title>
    <style>
    form { 
        margin: auto; 
        width:300px;
    }
    </style>
</head>


<body>
    <!-- Navbar  -->
    <?php include "php/navbar.php";?>
    
    
    <!-- Login -->
    <div class="w3-container w3-padding-64">
        <div class="w3-content w3-border w3-card w3-white w3-container" style="width:30%;">
            <h1 class="w3-center w3-text-pink" style="margin-bottom:30px">เข้าสู่ระบบ</h1>
            <form class="w3-container" action="">
                <p>
                    <div style="text-align:center;">
                        <label class="w3-text-pink"><b>Username</b></label>
                        <input class="w3-input w3-border w3-sand" name="usn" type="text">
                </p>
                <p>
                    <label class="w3-text-pink"><b>Password</b></label>
                    <input class="w3-input w3-border w3-sand" name="pss" type="password"></p>
        </div>
        <p>
            <div class="w3-center">
                <button class="w3-btn w3-pink w3-center" name="submit">เข้าสู่ระบบ</button>
        </p>
    </div>
    </form>
    </div>
    </div>


</body>

</html>