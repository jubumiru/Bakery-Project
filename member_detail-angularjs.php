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
    <title>Member Detail</title>
    <script src="js/angular.min.js"></script>
    <script src="js/angular-route.min.js"></script>
</head>

<body ng-app="App">
    <!-- Navbar -->
    <?php include "php/navbar.php" ?>

    <!-- Left Panel -->
    <div class="w3-container" style="margin-left:170px;">
        <div class="w3-row">
            <div class="w3-col m2 w3-margin-top w3-white">
                <div class="w3-bar-block">
                    <a href="#/" class="w3-bar-item w3-button w3-border">ข้อมูลส่วนตัว</a>
                    <a href="#/history" class="w3-bar-item w3-button w3-border">ประวัติการสั่งซื้อสินค้า</a>
                    <a href="#contact" class="w3-bar-item w3-button w3-border">ที่อยู่จัดส่ง</a>
                </div>
            </div>

            <div class="w3-col m8 w3-margin-top w3-margin-left">
                <div ng-view></div>
                <!-- <div class="w3-card w3-white">ข้อมูลส่วนตัว
                </div> -->



            </div>
        </div>

        <script>
            var app = angular.module('App', ['ngRoute']);
            app.config(function ($routeProvider , $locationProvider) {
                $locationProvider.hashPrefix('');
                $routeProvider
                    .when('/', { templateUrl: 'test.html' })
                    .when('/history',{ templateUrl: 'test2.html' })
            })
        </script>
</body>

</html>