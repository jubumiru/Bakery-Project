<?php 

    include '../connect.php';

    $id = isset($_GET['id']) ? $_GET['id'] : '';

    if($id!=''){
        $sql = "DELETE FROM product Where id ='".$id."' ";

        if($conn->query($sql)==TRUE){
            echo "<script>";
            echo "alert('delete success');";
            echo "window.location.href='admin_product.php';";
            echo "</script>";            
        }
        else{
            echo "error".sql."<br>".$conn->error;
        }
    
    
    }

//error_reporting(E_ALL);
//ini_set('display_errors',1);


?>
