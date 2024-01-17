<?php
include 'admin/reuse/dbConn.php';



if (isset($_POST['register'])) {

    $name =  $_POST['rname'];
    $email = $_POST['remail'];
    $phone = $_POST['rphone'];
    $address = $_POST['raddress'];
    $nid = $_POST['rnid'];
    $gender = $_POST['rgender'];
    $blood_group = $_POST['rblood'];
    $password = $_POST['rpassword'];


    $img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

    $sql = " select * from  users where email='$email' ";
    $query = mysqli_query($link, $sql);

    $row = mysqli_num_rows($query);
    if ($row == 1) {
        $_SESSION['em1'] = "Email Already Exist";
        header('location:signup.php');
    } else {


        if ($error === 0) {

            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
           
                $query = "INSERT INTO users(full_Name,email,phone_number,address,nid,gender,blood_group,password,dp) 
                    VALUES ('$name','$email','$phone','$address','$nid','$gender','$blood_group','$password',' $new_img_name')";
         
                 if (mysqli_query($link, $query)) {
                     header("location:" . 'login.php');
                     $_SESSION['em2'] = "Successfully Registered! Please Login!";
                 } 
                }
                }
        
        

     
    }


    mysqli_close($link);
}
