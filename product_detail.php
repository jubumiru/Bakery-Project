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
</head>


<body>
    <!-- Navbar  -->
    <?php include "php/navbar.php";?>

    <!-- Cake Detail -->
    <div class="w3-row w3-padding-64">
        <div class="w3-content w3-white">
            <div class="w3-col w3-container m4 l4">
                <img src="img/vanilacake.jpg" alt="" width="100%" height="100%">
            </div>
            <div class="w3-col w3-container m8 l8 w3-card w3-white">
                <header style="padding-left:10px;">
                    <h3>เค้กครีมวนิลา</h3>
                </header>
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
                    <button type="submit" onclick="document.getElementById('addtocart').style.display='block'">สั่งซื้อ</button>


                    <div id="addtocart" class="w3-modal">
                        <div class="w3-modal-content w3-animate-zoom w3-padding-large w3-round" style="width:40%;">
                            <div class="w3-container w3-white w3-center">
                                <a href="member_cart.php"><i onclick="document.getElementById('addtocart').style.display='none'" class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i></a>
                                <h2>เพิ่มสินค้าลงในตะกร้าเรียบร้อย</h2>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

</body>

</html>