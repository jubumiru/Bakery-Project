<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">
    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-pink.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
    <title>รายงานการขาย</title>
    <style>
        canvas {

            width: 750px !important;
            height: 500px !important;

        }
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

<body>

    <body>
        <!-- Navbar -->
        <?php include "navbara.php" ?>

        <!-- Left Panel -->
        <div class="w3-container" style="margin-left:170px;">
            <div class="w3-row">
                <div class="w3-col m2 w3-margin-top w3-white">
                    <div class="w3-bar-block">
                        <a href="admin_edit_pass.php" class="w3-bar-item w3-button w3-border">เปลี่ยนรหัสผ่าน</a>
                        <a href="admin_product.php" class="w3-bar-item w3-button w3-border">แก้ไขสินค้า</a>                        
                        <a href="admin_order.php" class="w3-bar-item w3-button w3-border">รายการสั่งซื้อ</a>
                        <a href="admin_report.php" class="w3-bar-item w3-button w3-border">รายงานการขาย</a>
                    </div>
                </div>

                <!-- Right Panel -->
                <div class="w3-col m8 w3-margin-top w3-margin-left w3-white w3-round">
                    <div class="w3-center">
                        <p>รายงานการขายประจำ <select style="float:center;">
                                <option value="1">เดือน</option>
                                <option value="2">ปี</option>
                            </select>
                            <button class="w3-round">ตกลง</button>

                        </p>

                        <canvas id="myChart"></canvas>
                        <script>
                            var ctx = document.getElementById("myChart").getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม"],
                                    datasets: [{
                                        label: 'รายได้',
                                        data: [12, 15, 3, 5, 2],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(255, 0, 0, 0.5)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    maintainAspectRatio: false,
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>
                        
                    </div>
                </div>
            </div>

    </body>

</html>