<!-- ดึงข้อมูลจากฐานข้อมูล -->
<?php 
include '../connect.php';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$select = mysqli_query($conn,"SELECT * FROM product WHERE id = '".$id."'");
$row = mysqli_fetch_assoc($select);
?>
<!-- ส่วน html -->
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
    <title>Admin</title>
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
                <div class="w3-col m8 w3-margin-top w3-margin-left">
                    <form>
                        <fieldset>
                            <legend>ข้อมูลสินค้า</legend>
                            <a href="admin_product_add.php" class="w3-btn w3-theme w3-center w3-round-large" style="margin-top:20px;">
                                + เพิ่มสินค้า</a>
                            <table class="w3-table-all " style="margin-top:10px;">
                                <thead>
                                    <tr class="w3-theme-l3 w3-center">
                                        <th>ลำดับที่</th>
                                        <th>ชื่อเมนู</th>
                                        <th>จัดการ</th>
                                    </tr>
                                </thead>

<?php $query = "SELECT * FROM product ORDER BY id asc" or die("Error:" . mysqli_error());
$result = mysqli_query($conn, $query); 

  while($row = mysqli_fetch_array($result)) { 
    echo "<tr class='w3-theme-l5'>";
    echo "<td>" .$row["id"] .  "</td> "; 
    echo "<td>" .$row["Product_Name"] .  "</td> ";  
    echo "<td><a href='admin_product_edit.php?id=$row[0]'>แก้ไขข้อมูล</a> ||| <a href='deleteproduct.php?id=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\">ลบข้อมูล</a></td> ";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);

?> 
                            </table>
                </div>
            </div>

            </fieldset>
            </form>
        </div>
        </div>

    </body>
</body>

</html>