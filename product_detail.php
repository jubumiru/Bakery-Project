<?php 
include 'connect.php';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$select = mysqli_query($conn,"SELECT * FROM product WHERE id = '".$id."'");
$row = mysqli_fetch_assoc($select);

?>


<!-- หน้า html -->
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
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
    <title>Mrs. Taew Bakery</title>
</head>
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

<body ng-app="myApp" data-ng-init="quantity=1" ng-controller="myCtrl">
    <!-- Navbar  -->
    <?php include('selectnav.php');?>

    <?php 
    if(isset($_SESSION['UserID'])) {
        $userId = $_SESSION['UserID'];
    } else {
        $userId = 'null';
    }
    ?>

    <!-- Cake Detail -->
    <div class="w3-row w3-padding-64">
        <div class="w3-content w3-white">
            <div class="w3-col w3-container m4 l4">
                <img src="uploads/<?php echo $row['image']; ?>" alt="" width="100%" height="100%">
            </div>
            <div class="w3-col w3-container m8 l8 w3-card w3-white">
                <header style="padding-left:10px;">
                    <h3>
                        <?php echo $row['Product_Name']; ?>
                    </h3>
                </header>
                <article style="padding:10px;">
                    <h5>
                        <?php echo $row['Product_Detail']; ?>
                    </h5>
                    <!-- <?php 
                    if($row['Product_Category'] == 'เค้กวันเกิด'){
                        echo'
                            <div class="w3-col m4 w3-padding">
                                <p>ขนาด <input type="number" min="1" max="5" name="size" value="1"> ปอนด์</p>
                            </div>
                    ';}?> -->
                    <div>
                    <div class="w3-col m4 w3-padding">
                        <p>จำนวน <input type="number" min="1" max="50" name="amount" ng-model="quantity"> ชิ้น</p>
                    </div>

                    <div class="w3-col m4 w3-padding">
                        <p ng-model="sum">ราคา {{quantity*price}} บาท</p>
                    </div>
                    </div>
                </article>


                <div class="w3-center w3-row w3-padding">
                    <?php
                    if($row['Product_Category'] == 'เค้กวันเกิด'){
                    echo'
                        <p>ข้อความที่ต้องการบนหน้าเค้ก</p>
                        <textarea name="" id="" cols="40" rows="3" ng-model="cdetail"></textarea>
                    ';}?>
                </div>
                <h5 class="w3-text-red w3-center">* กรุณาสั่งจองล่วงหน้าก่อนวันที่ต้องการรับ อย่างน้อย 2 วัน *</h5>
                <div class="w3-center"><button type="submit" ng-click="checkUser()">สั่งซื้อ</button>
                </div>

                
            </div>

            <script>
                var app = angular.module('myApp', []);
                    app.controller('myCtrl', function($scope) {
                    
                    $scope.price = <?php echo json_decode($row['Product_Price']);?>;
                    $scope.checkUser = () => {
                        let status = <?php echo $userId;?>;
                        if(status === null){
                        alert("กรุณาเข้าสู่ระบบ");
                    }else{
                        let product = <?php echo json_encode($row);?> ;
                        let cart = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [];
                        product.quantity = $scope.quantity
                        product.sum = $scope.quantity*$scope.price
                        product.detail = $scope.cdetail ? $scope.cdetail : ''

                        let check = cart.find(item => {
                            return item.id === product.id
                        })

                        if(check) {
                            alert("คุณมีสินค้านี้อยู่ในตะกร้าแล้ว !");
                        } else {
                            cart.push(product)
                            localStorage.setItem('cart', JSON.stringify(cart));
                            alert("เพิ่มสินค้าลงในตะกร้าแล้ว !");
                            window.location.href = 'member_cart.php'
                        }

                    }
                    }
                    });
            </script>

        </div>
    </div>

</body>

</html>