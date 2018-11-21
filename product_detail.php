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
                    <a href="product.php" class="w3-button  w3-theme">สินค้าของเรา</a>
                    <a href="" class="w3-button  w3-theme">โปรโมชั่น</a>
                    <a href="" class="w3-button  w3-theme">สั่งซื้อสินค้า</a>
                    <a href="" class="w3-button  w3-theme">แจ้งชำระเงิน</a>
                    <a href="contact.php" class="w3-button  w3-theme">ติดต่อเรา</a>
                </div>
        </div>
    </div>


    <div class="w3-row w3-padding-64">
        <div class="w3-content w3-white">
            <div class="w3-col w3-container m4 l4">
                <img src="img/vanilacake.jpg" alt="" width="100%" height="100%">
            </div>
            <div class="w3-col w3-container m8 l8 w3-card w3-white">  
                <header style="padding-left:10px;"><h3>เค้กครีมวนิลา</h3></header>
                <article style="padding:10px;">
                    <h5>รายละเอียดสินค้า</h5>
                    <p><small>เค้กวันเกิด</small></p>
                    <div class="w3-col m4 w3-padding">
                        <p>ขนาด <input type="number" min="1" max="5" name="size"> ปอนด์</p>
                    </div>
                    
                    <div class="w3-col m4 w3-padding">
                        <p>จำนวน <input type="number" min="1" max="50" name="amount"> ชิ้น</p>
                    </div>
                    
                    <div class="w3-col m4 w3-padding">
                        <p>ราคา<output name="sumPrice"> ... </output>บาท</p>
                    </div>
                    </article>
                    
                    <div class="w3-center w3-row w3-padding">
                        <p>ข้อความและลวดลายที่ต้องการบนหน้าเค้ก</p>
                        <textarea name="" id="" cols="40" rows="3"></textarea>
                        <h5 class="w3-text-red">* กรุณาสั่งจองล่วงหน้าก่อนวันที่ต้องการรับ อย่างน้อย 2 วัน *</h5>
                        <button type="submit">สั่งซื้อ</button>
                    </div>
                    
                
            
            </div>
        </div>
    </div>

</body>
</html>