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
  <!-- Dropdown -->
  <div class="w3-container w3-card" style="margin-top:20px;text-align:center; width:70%; margin-left:190px;">
    <div class="w3-bar">
      <div class="w3-dropdown-click" style="margin-top:20px; margin-left:20px;">
        <button onclick="myFunction()" class="w3-btn  w3-round-xlarge w3-theme">หมวดหมู่สินค้า <i class="fa fa-caret-down"></i></button>
        <div id="Demo" class="w3-dropdown-content w3-bar-block ">
          <a href="#" class="w3-bar-item w3-button">เค้กวันเกิด</a>
          <a href="#" class="w3-bar-item w3-button">เค้กชิ้น</a>
          <a href="#" class="w3-bar-item w3-button">เอแคลร์</a>
          <a href="#" class="w3-bar-item w3-button">ขนมปังกรอบ</a>
          <a href="#" class="w3-bar-item w3-button">คุกกี้</a>
        </div>
      </div>
      <div style="margin-top:20px; margin-left:20px;">
        <button class="w3-bar-item w3-btn w3-theme w3-mobile w3-right "><i class="fa fa-search"></i></button><input
          type="text" class="w3-bar-item w3-input w3-white w3-mobile w3-right" placeholder="ค้นหาสินค้า...">
      </div>
    </div>


    <!-- First Photo Grid-->
    <div class="w3-row-padding" style="margin-top:20px;">
      <div class="w3-third w3-container w3-margin-bottom">
        <a href="product_detail.php" style="text-decoration:none;">
          <img src="img/vanilacake.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>เค้กครีมวนิลา</b></p>
          </div>
        </a>
      </div>
      <div class="w3-third w3-container w3-margin-bottom">
        <a href="product_detail.php" style="text-decoration:none;">
          <img src="img/chococake.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>เค้กช็อคโกแลต</b></p>
          </div>
        </a>
      </div>
      <div class="w3-third w3-container">
        <a href="product_detail.php" style="text-decoration:none;">
          <img src="img/strawcake.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>เค้กสตรอเบอร์รี่</b></p>
          </div>
        </a>
      </div>
    </div>

    <!-- Second Photo Grid-->
    <div class="w3-row-padding">
      <div class="w3-third w3-container w3-margin-bottom">
        <a href="product_detail1.php" style="text-decoration:none;">
          <img src="img/goldcake.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>เค้กชิ้นฝอยทอง</b></p>
          </div>
        </a>
      </div>
      <div class="w3-third w3-container w3-margin-bottom">
        <a href="product_detail1.php" style="text-decoration:none;">
          <img src="img/browniee.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>บราวน์นี่</b></p>
          </div>
        </a>
      </div>
      <div class="w3-third w3-container">
        <a href="product_detail1.php" style="text-decoration:none;">
          <img src="img/roll.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>เค้กโรลวนิลา</b></p>
          </div>
        </a>
      </div>
    </div>

    <!-- Third Photo Grid-->
    <div class="w3-row-padding">
      <div class="w3-third w3-container w3-margin-bottom">
        <a href="product_detail1.php" style="text-decoration:none;">
          <img src="img/cookies.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>คุกกี้</b></p>
          </div>
        </a>
      </div>
      <div class="w3-third w3-container w3-margin-bottom">
        <a href="product_detail1.php" style="text-decoration:none;">
          <img src="img/supreme.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>เอแคลร์</b></p>
          </div>
        </a>
      </div>
      <div class="w3-third w3-container">
        <a href="product_detail1.php" style="text-decoration:none;">
          <img src="img/bread.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>ขนมปังกรอบ</b></p>
          </div>
        </a>
      </div>
    </div>
  </div>
  </div>

  <script>
    function myFunction() {
      var x = document.getElementById("Demo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
  </script>
</body>

</html>