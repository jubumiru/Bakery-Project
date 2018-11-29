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

    <!-- Bakery Detail -->
    <div class="w3-row w3-padding-64">
        <div class="w3-content w3-white">
            <div class="w3-col w3-container m4 l4">
                <img src="img/browniee.jpg" alt="" width="100%" height="100%">
            </div>
            <div class="w3-col w3-container m8 l8 w3-card w3-white">
                <header style="padding-left:10px;">
                    <h3>บราวน์นี่</h3>
                </header>
                <article style="padding:10px;">
                    <h5>รายละเอียดสินค้า</h5>
                    <p><small>เค้กทั่วไป</small></p>

                    <div class="w3-col m6 w3-padding">
                        <p>จำนวน <input type="number" min="1" max="50" name="amount"> กล่อง</p>
                    </div>

                    <div class="w3-col m6 w3-padding">
                        <p>ราคา<output name="sumPrice"> ... </output>บาท</p>
                    </div>
                </article>

                <div class="w3-center w3-row w3-padding">
                    <h5 class="w3-text-red">* กรุณาสั่งจองล่วงหน้าก่อนวันที่ต้องการรับ อย่างน้อย 2 วัน *</h5>
                    <button type="submit">สั่งซื้อ</button>
                </div>



            </div>
        </div>
    </div>

</body>

</html>