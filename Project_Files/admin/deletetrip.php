<?php
include('reuse/dbConn.php');


     $id = $_GET['id'];

    $sql = "DELETE FROM trip_package where id = $id";



    $res = mysqli_query($link,$sql);
    if($res == true){

        $_SESSION['delete'] = 'Trip Package deleted successfully';
        header("location:".'manage-trip.php');
       

    }else{
        $_SESSION['delete'] = 'Failed to delete trip !';
        header("location:".'manage-trip.php');

    }




?>