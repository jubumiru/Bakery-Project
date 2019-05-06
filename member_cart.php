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
    <title>Member Cart</title>
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

<body ng-app="myCart" ng-controller="myCartCtrl">
    <!-- Navbar -->
    <?php include "selectnav.php" ?>

    <div class="w3-center w3-xlarge" style="margin-top:20px; "><i class="fa fa-shopping-cart"></i> ตะกร้าของฉัน</div>
    <div class="w3-row-padding w3-container  w3-center" style="margin-top:20px; margin-left:150px; margin-right:150px">
        <!-- ตารางสินค้า-->
        <table class="w3-table-all">
            <thead>
                <tr class="w3-theme-l3">
                    <th>รูปสินค้า</th>
                    <th>รายละเอียดสินค้า</th>
                    <th>จำนวน</th>
                    <th>ราคา</th>
                    <th>ลบ</th>
                </tr>
            </thead>
            <tr ng-repeat="product in cart">
                <td style="width:20%"><img src="uploads/{{product.image}}" alt="" style="width:100%"></td>
                <td>  {{ product.Product_Name }}<br> {{product.detail}}</td>
                <td><input type="number" min="1" max="50" name="amount" ng-model="product.quantity" ng-change="calTotal($index)"> ชิ้น</p>
                </td>
                <td> {{ product.sum }}</td>
                <td><button class="w3-btn w3-small w3-red" ng-click="openModal($index)"><a
                            href=""><i class="fa fa-trash"></i></a></button></td>

            </tr>
        </table>
    </div>
    <div class="w3-center">
        <button class="w3-btn w3-theme-l3 w3-center w3-round-large" style="margin-top:20px;margin-bottom:10px;" ng-click="confirmOrder()">
               ยืนยัน</button>
        <button class="w3-btn w3-red w3-center w3-round-large" style="margin-top:20px;margin-bottom:10px;"><a href="product.php">สั่งซื้อเพิ่ม</a></button>
    </div>

    <div id="premove" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom w3-padding-small w3-round" style="width:40%;">
            <div class="w3-container w3-white w3-center">
                <a href=""><i onclick="document.getElementById('premove').style.display='none'" class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i></a>
                <h2>ยืนยันการลบ ?</h2>
                <div class="w3-container w3-center w3-section ">
                    <button class="w3-button w3-round w3-theme" ng-click="removeProduct()">ตกลง</button>
                    <!-- <a href="" class="w3-button w3-round w3-theme" onclick="removepd()"><i class=""></i>ตกลง</a> -->
                    <a href="" class="w3-button w3-round w3-light-grey"><i class=""></i> ยกเลิก</a>
                </div>
                </div>
            </div>
        </div>

        <script>
            var app = angular.module('myCart', []);
            app.controller('myCartCtrl', function($scope) {
                    $scope.cart = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : []
                    $scope.selectedIndex = null

                    console.log($scope.cart)

                    $scope.openModal = (index) => {
                        document.getElementById('premove').style.display='block'
                        $scope.selectedIndex = index
                        
                    }

                    $scope.removeProduct = () => {
                        $scope.cart.splice($scope.selectedIndex, 1)
                        localStorage.setItem('cart', JSON.stringify($scope.cart))
                        document.getElementById('premove').style.display='none'
                    }
                    $scope.confirmOrder = () =>{
                        localStorage.setItem('cart', JSON.stringify($scope.cart))
                        window.location.href = "member_orderlist.php";
                    }

                    $scope.calTotal = (index) =>{
                        $scope.cart[index].sum = $scope.cart[index].quantity * $scope.cart[index].Product_Price
                    }
            })
        </script>

        <!-- <script>
            console.log(localStorage.getItem('cart'))
                var app = angular.module('myCart', []);

                    app.controller('myCartCtrl', function($scope) {
                    $scope.cart = localStorage.getItem('cart')
                    console.log(localStorage.getItem('cart'))
                    }
        </script> -->

</body>

</html>