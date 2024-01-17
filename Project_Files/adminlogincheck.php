<?php
session_start();

$con = mysqli_connect('localhost', 'root', '', 'tripon2' );
if($con){
}

$db = mysqli_select_db($con, 'tripon2');

if(isset($_POST['submit'])){

     $email = $_POST['email'];
     $password = $_POST['password'];

	$sql = " select * from  admin where email='$email' and password='$password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['aemail'] = $email;
			header('location:admin/index.php');
		}else{
			$_SESSION['almsg'] = "Password is incorrect";
			header('location:adminlogin.php');
		}

}


?>