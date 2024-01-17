<?php
include('admin/reuse/dbConn.php');
    $e = $_SESSION['email'];

     $id = $_GET['id'];

    $sql = "DELETE FROM cart where   email = '$e'";



    $res = mysqli_query($link,$sql);
    if($res == true){

        $_SESSION['cdelete'] = 'Package deleted successfully';
        header("location:".'cart.php');
       

    }else{
       
    }




?>