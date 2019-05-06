<?php
    session_start();
    include('connect.php');
    $query = "SELECT * FROM `member` WHERE username = '".mysqli_real_escape_string($conn,$_POST['txtUsername'])."'
            AND password = '".mysqli_real_escape_string($conn, $_POST['txtPassword'])."'";
    $objQuery = mysqli_query($conn,$query);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

    if(!$objResult){
            echo "<script>";
            echo "alert(\"Username หรือ Password ไม่ถูกต้อง\");";
            echo "window.location = 'Login.php';"; //ไปหน้าเเรก
            echo "</script>";
    }
    else
    {
        $_SESSION["UserID"] = $objResult["member_id"];
        $_SESSION["Status"] = $objResult["status"];

        session_write_close();

        if($objResult["status"] == "admin" )
        {
            header("Location: admin/admin_edit_pass.php");
        }
        else
        {
            header("Location: index.php");
        }
    }
    mysqli_close($conn);
?>
