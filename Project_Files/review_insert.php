<?php include('admin/reuse/dbConn.php');
 if(isset($_POST['submit'])){
           if(isset($_SESSION['email'])){
         $email=$_SESSION['email'];
         
         if(!empty( $_POST['message']) && !empty($_POST['star'])){
          
            $msg =$_POST['message'];
            $rating=$_POST['star'];
        
       

        $query = "INSERT INTO review(user_email,msg,rating) VALUES ('$email','$msg','$rating')";
        if (mysqli_query($link, $query)) {
            
            $_SESSION['r_msg'] = "Thanks for your feedback";
            header("location:".'review.php');
        }
     
		
  
}else{
    $_SESSION['r_msg'] = "All fields are required";
    header("location:".'review.php');
        
    }
}else{
    header("location:".'login.php');
}
 }
?>


