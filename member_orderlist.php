<!DOCTYPE html>
<html lang="en">
<?php include "selectnav.php";
    $query = "SELECT * FROM address WHERE member_id='".$_SESSION['UserID']."'";
    $objQuery = mysqli_query($conn, $query);
?>

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
    <title>Member</title>
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

        <!-- Content -->
        <div class="w3-content">
            <div>
                </i>
                <h5 style="text-align:center;margin-top:20px;"><i class="fa fa-bars"></i> รายละเอียดการสั่งซื้อสินค้า</h5>

                <table class="w3-table-all" style="margin-top:20px;">
                    <tr class="w3-padding">
                        <th class=>รายละเอียดสินค้า</th>
                        <th class=>จำนวน</th>
                        <th class=>ราคา</th>
                    </tr>
                    <tr ng-repeat="product in cart">
                        <td class=>{{product.Product_Name}}</td>
                        <td class=>{{product.quantity}}</td>
                        <td class=>{{product.sum}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>ราคารวม</td>
                        <td>{{ cartTotal }}</td>
                    </tr>
                </table>
                <form action="">
                    <fieldset style="margin-top:20px;">
                        <legend>กรอกรายละเอียดเพิ่มเติม</legend>
                        <div class="w3-row">
                            <div class="w3-col m4">
                                <p></p>
                            </div>
                            <div class="w3-col m5">
                                <p class="">วันที่ต้องการจัดส่ง : <input type="date" ng-model="selectDate"> <i class="fa fa-calendar"></i></>
                                </p>
                                <p class="w3-center">ที่อยู่ในการจัดส่ง</p>
                                <?php foreach($objQuery as $key=>$objResult) {?>
                                <input type="radio" name="radAnswer" value="<?php echo $objResult['Address_ID'] ?>" ng-model="selectAd"><?php echo " ",$objResult["Address_Number"] ," " , $objResult["Address_Street"]," ", $objResult["Address_Tambon"]," ",$objResult["Address_District"]," ",$objResult["Address_Province"]," ",$objResult["Postcode"]; ?><br>
                                <?php } ?>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <div style="text-align:center;padding:10px;">
                    <a href="member_cart.php">ย้อนกลับ</a> ||
                    <button ng-click="confirmOrder()">กด</button>
                    <!-- <a href="payment.php" style="text-decoration:none;" class="w3-button w3-round-large w3-theme">ยืนยัน</a> -->

                </div>
            </div>
        </div>
        <script>
            var app = angular.module('myCart', []);
            app.controller('myCartCtrl', ($scope, $http) => {
                $scope.cart = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : []
                $scope.cartTotal = $scope.cart.reduce((total, product) => {
                    return total + product.sum
                }, 0)

                $scope.confirmOrder = () => {
                    let userId = <?php echo json_decode($_SESSION['UserID']);?>

                    let order = {
                        userData: {
                            userId: userId,
                            addressId: $scope.selectAd
                        },
                        orderDetail: $scope.cart,
                        total: $scope.cartTotal,
                        deliveryDate: $scope.selectDate
                    };

                    $http.post('/project/api/submitorder', order).then((res) => {
                       localStorage.clear()
                       window.location.href = "payment.php";
                    },
                    err => {
                       
                    }
                    );
                    
                    console.log(JSON.stringify(order))
                }
            }) 
        
        </script>

    </body>

</html>