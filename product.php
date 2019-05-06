<?php
// ค้นหาข้อมูลแบบ text
$search_text = ''; 
if(isset($_GET['search_text'])){
    $search_text = $_GET['search_text'];
}
include ('connect.php');

$sql = 'SELECT * FROM product';
$query = mysqli_query($conn, $sql);

?>

<!-- html -->
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
  <link rel="stylesheet" href="./css/autocompletestyles.css">
  <script src="./js/jquery-3.3.1.min.js"></script>
  <script src="./js/jquery.autocomplete.min.js"></script>
  <title>สินค้าของเรา</title>
</head>
<!-- font -->
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

<body>
  <!-- Navbar  -->
  <?php include('selectnav.php');?>
  <!-- Dropdown -->
  <div class="w3-content w3-card  w3-row">
    <div class="w3-bar">
      <div class="w3-dropdown-click" style="margin-top:20px; margin-left:20px;">
        <button onclick="myFunction()" class="w3-btn  w3-round-xlarge w3-theme">หมวดหมู่สินค้า <i class="fa fa-caret-down"></i></button>
        <div id="Demo" class="w3-dropdown-content w3-bar-block ">
          <a href="product.php?category=เค้กวันเกิด" class="w3-bar-item w3-button">เค้กวันเกิด</a>
          <a href="product.php?category=เค้กชิ้น" class="w3-bar-item w3-button">เค้กชิ้น</a>
          <a href="product.php?category=เอแคลร์" class="w3-bar-item w3-button">เอแคลร์</a>
          <a href="product.php?category=ขนมปังกรอบ" class="w3-bar-item w3-button">ขนมปังกรอบ</a>
          <a href="product.php?category=คุ้กกี้" class="w3-bar-item w3-button">คุ้กกี้</a>
        </div>
      </div>
      <div style="margin-top:20px; margin-left:20px;">
        <form action="product.php" method="GET">
          <button class="w3-bar-item w3-btn w3-theme w3-mobile w3-right " type="submit"><i class="fa fa-search"></i></button>
          <input id="search_text" name="search_text" type="taxt" class="w3-bar-item w3-input w3-white w3-mobile w3-right" placeholder="ค้นหาสินค้า...">
        </form>
      </div>
    </div>

    <!-- First Photo Grid จัดแต่งระยะห่างระหว่างรูป-->
    <div class="w3-row-padding" style="margin-top:20px;">

<!-- ดึงข้อมูลมายังหน้าแสดงรายการสินค้า -->
      <?php
include 'connect.php';
// ดึงรูปจาก Database
if(isset($_GET['category'])){
  $category = $_GET['category'];
  $query = $conn->query("SELECT * FROM `product` WHERE `Product_Category` = '$category'");
} else {
  $query = $conn->query("SELECT * FROM product WHERE Product_Name LIKE '%$search_text%'ORDER BY id DESC");
}

if($query){
    while($row = mysqli_fetch_assoc($query)){

        echo '
        <tr>
          <td>
            <div class="w3-col l3 m6 w3-margin-bottom">
              <div class="w3-display-container">   
                <img src="uploads/'.$row['image'].'" alt="" style="width:100%">
<!-- ปุ่มกดแสดงชื่อสินค้า -->
                  <p class="w3-center"><a href="product_detail.php?id='.$row['id'].'" class="w3-button w3-theme-l3 w3-round w3-padding-large w3-lagge w3-block">'.$row['Product_Name'].'</a></p>
              </div>
            </div>
          </td>
        </tr>
        ';

      
?>

      <?php }
}else{ ?>
      <p>Not found...</p>
      <?php } ?>

<!-- สำหรับปุ่ม option -->
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
<!--  สำหรับการ search -->
  <script>
      $('#search_text').autocomplete({
          serviceUrl: './api/search.php',
          onSelect: function (suggestion) {
              $(this).text(suggestion)
          }
      });
  </script>





    </div>
</body>

</html>