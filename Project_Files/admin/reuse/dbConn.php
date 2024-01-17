<?php
ob_start();
session_start();

define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'tripon2');

$link = mysqli_connect("localhost", "root", "", "tripon2");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>



