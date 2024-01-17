<?php
include('reuse/dbConn.php');


     $id = $_GET['id'];

    $sql = "DELETE FROM catagory where c_id = $id";



    $res = mysqli_query($link,$sql);
    if($res == true){

        $_SESSION['delete'] = 'Catagory deleted successfully';
        header("location:".'managecatagory.php');
       

    }else{
        $_SESSION['delete'] = 'This Catagory Have Trip.Data Delete The trip Data First !';
        header("location:".'managecatagory.php');

    }




?>