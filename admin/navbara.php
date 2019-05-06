<?php
    session_start();
    include('../connect.php');
    if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
        exit();
        heading("Location: ../index.php");
	}

	if($_SESSION['Status'] != "admin")
	{
		echo "Admin Only!";
		exit();
    }

    $query = "SELECT * FROM `member` WHERE member_id = '".$_SESSION['UserID']."'";
    $objQuery = mysqli_query($conn, $query);
    $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

?>



<div class="w3-row" style="text-align:center;">
    <a href="admin_edit_pass.php">
        <img src="../img/logo.png" alt="taewlogo" style="width:260px;height:240px;"></a>
</div>
<div class="w3-text-blue" style="text-align:right;padding-right:190px;">
    <a href="admin_edit_pass.php">จัดการร้าน</a> ||
    <a href="../logout.php">ออกจากระบบ</a>
</div>
</div> 