<?php
include('reuse/dbConn.php');


     $id = $_GET['id'];

    $sql = "DELETE FROM users where id = $id";



    $res = mysqli_query($link,$sql);
    if($res == true){

        $_SESSION['delete'] = 'User deleted successfully';
        header("location:".'viewusers.php');
       

    }else{
        $_SESSION['delete'] = 'Failed';
        header("location:".'viewusers.php');

    }




?>