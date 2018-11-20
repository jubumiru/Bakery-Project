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
    </style>
</head>


<body>
<div class="w3-row" style="text-align:center;">
        <a href="index.php">
          <img src="img/logo.png" alt="taewlogo" style="width:260px;height:240px;"></a>
          </div>
          <div class="w3-text-blue" style="text-align:right;padding-right:190px;">
          <a href="signup.php">สมัครสมาชิก</a> ||
          <a href="Login.php">เข้าสู่ระบบ</a>
          </div>
    <div class="w3-container" style="margin-top:20px;text-align:center;">
        <div class="w3-bar">
                <div>
                    <a href="index.php" class="w3-button  w3-theme">หน้าแรก</a>
                    <a href="" class="w3-button  w3-theme">สินค้าของเรา</a>
                    <a href="" class="w3-button  w3-theme">โปรโมชั่น</a>
                    <a href="" class="w3-button  w3-theme">สั่งซื้อสินค้า</a>
                    <a href="" class="w3-button  w3-theme">แจ้งชำระเงิน</a>
                    <a href="" class="w3-button  w3-theme">ติดต่อเรา</a>
                </div>
        </div>
    </div>

<div class="w3-content w3-display-container" style="margin-top:30px;">
    <div class="w3-display-container mySlides">
        <img src="img/cake1.JPG" style="display:block;width:100%;height:600px;" class="img-resize">
    </div>
    
    <div class="w3-display-container mySlides">
        <img src="img/cake2.JPG" style="display:block;width:100%;height:600px;" class="img-resize">
    </div>
    
    <div class="w3-display-container mySlides">
        <img src="img/brownie.jpg" style="display:block;width:100%;height:600px;" class="img-resize">
    </div>

    <button class="w3-button w3-display-left  w3-theme-l3" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-display-right  w3-theme-l3" onclick="plusDivs(1)">&#10095;</button>
</div>
<hr>
<div class="footer">
    <p>footer</p>
</div>



<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>