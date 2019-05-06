<!DOCTYPE html>
<html lang="en">

<?php include('selectnav.php');
    $query = "SELECT * FROM `order` WHERE member_id='".$_SESSION['UserID']."' AND order_status = 'ยังไม่ชำระ'";
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
    <title>Payment</title>
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

<body>
    <!-- Navbar  -->
    <div class="w3-row-padding w3-container w3-card w3-center" style="margin-top:20px; margin-left:300px; margin-right:300px ">
        <table class="w3-table-all">
            <thead>
                <tr class="w3-theme-l3">
                    <th>หมายเลขออเดอร์</th>
                    <th>วันที่ต้องการรับ</th>
                    <th>ราคา</th>
                    <th>สถานะ</th>
                    <th>แจ้งชำระเงิน</th>
                </tr>
            </thead>
            <?php foreach($objQuery as $objResult) {
            echo "<tr>";
            echo  "<td>".$objResult['Order_ID']."</td>";
            echo  "<td>".$objResult['Delivery_Date']. "</td>";
            echo  "<td>".$objResult['Total']. "</td>";
            echo  "<td>".$objResult['Order_Status']. "</td>";
            echo  "<td><button class='w3-btn w3-small w3-red'><a href='member_payment.php?id=$objResult[Order_ID]'>ชำระเงิน</a></button></td>";
            echo "</tr>";
         }; 
         ?>
        
        </table>
    </div>
    </div>

</body>

</html>