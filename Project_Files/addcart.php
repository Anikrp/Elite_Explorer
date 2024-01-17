<?php include('admin/reuse/dbConn.php');
           if(isset($_SESSION['email'])){
         
        
        $id = $_GET['id'];
        $email = $_SESSION['email'];
        
        $sql ="SELECT * FROM trip_package WHERE id = '$id'";
        $res = mysqli_query($link,$sql);
        while($rows = mysqli_fetch_assoc($res))
                {

        $price = $rows['price']; } 
        
        $query = "INSERT INTO cart(email,p_id,qty,price) VALUES ('$email','$id',1,'$price')";
        if (mysqli_query($link, $query)) {
            $_SESSION['add'] = "Added Successfully";
            header("location:".'cart.php');
        }
     
		
  
}else{   header("location:".'login.php');

}
        


    ?>


