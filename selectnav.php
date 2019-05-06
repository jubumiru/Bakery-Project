<?php
        session_start();
        include('connect.php');

        if(isset($_SESSION['UserID'])){
            include('navbarm.php');
        }else{
            include('navbar.php');
        }
    
?>