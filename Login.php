<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href = "css/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-pink.css">
    <title>Mrs. Taew Bakery</title>
    <style>
    .w3-bar .w3-button{
        margin-right:10px;
        width:150px;
    }
    .footer {
    left: 0;
    bottom: 0;
    width: 100%;
    color: white;
    text-align: center;
    }
    body{
        background-color:  #ffe6cc;
    }
    form { 
        margin: auto; 
        width:300px;
    }
    </style>
</head>


<body>
<div class="w3-row" style="text-align:center;">
        <a href="index.php">
          <img src="img/logo.png" alt="taewlogo" style="width:260px;height:240px;"></a>
          </div>
          <div class="w3-text-blue" style="text-align:right;padding-right:190px;">
          <a href="signup.php">สมัครสมาชิก</a> ||
          <a href="login.php">เข้าสู่ระบบ</a>
          </div>
    <div class="w3-container" style="margin-top:20px;text-align:center;">
        <div class="w3-bar">
                <div>
                    <a href="index.php" class="w3-button  w3-theme">หน้าแรก</a>
                    <a href="product.php" class="w3-button  w3-theme">สินค้าของเรา</a>
                    <a href="" class="w3-button  w3-theme">โปรโมชั่น</a>
                    <a href="" class="w3-button  w3-theme">สั่งซื้อสินค้า</a>
                    <a href="" class="w3-button  w3-theme">แจ้งชำระเงิน</a>
                    <a href="contact.php" class="w3-button  w3-theme">ติดต่อเรา</a>
                </div>
        </div>
    </div>
<!-- Login -->

<div class="w3-container w3-padding-64">
  <div class="w3-content w3-border w3-card w3-white w3-container" style="width:30%;">
    <h1 class="w3-center w3-text-pink" style="margin-bottom:30px">เข้าสู่ระบบ</h1>
    <form class="w3-container" action="">
    <p>
    <div style="text-align:center;">      
    <label class="w3-text-pink"><b>Username</b></label>
    <input class="w3-input w3-border w3-sand" name="first" type="text"></p>
    <p>      
    <label class="w3-text-pink"><b>Password</b></label>
    <input class="w3-input w3-border w3-sand" name="last" type="password"></p></div>
    <p>
    <div class="w3-center">
    <button class="w3-btn w3-pink w3-center">เข้าสู่ระบบ</button></p>
    </div>
  </form>
  </div>
</div>



</body>
</html>