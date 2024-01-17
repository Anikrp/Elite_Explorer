<?php 
include('reuse/menu.php');
include('reuse/dbConn.php');

//echo $_SESSION['aemail'];
if (isset($_SESSION['aemail'])) {
 ?>

<?php
            $sql1 = "SELECT COUNT(*) from catagory";
            $sql2 = "SELECT COUNT(*) from trip_package";
            $sql3 = "SELECT COUNT(*) from orders";

            $res = mysqli_query($link,$sql1);
            $res2 = mysqli_query($link,$sql2);
            $res3 = mysqli_query($link,$sql3);

            if($res == true){
                $count = mysqli_num_rows($res);

            }
            $row = mysqli_fetch_assoc($res);
            $ct = $row['COUNT(*)'];
            $row2 = mysqli_fetch_assoc($res2);
            $ct2 = $row2['COUNT(*)'];
            $row3 = mysqli_fetch_assoc($res3);
            $ct3 = $row3['COUNT(*)'];
             
?>

        <div class = "content">
            <div class = "wrapper">
                <h1 >DASHBOARD</h1>

                    <div class = "four">
                        <h1><?php echo $ct?></h1>
                        
                        Catagories

                    </div>
                   
                    <div class = "four">
                    <h1><?php echo $ct3?></h1>
                        
                        Total Orders

                    </div>
                    <div class = "four">
                        <h1><?php echo $ct2?></h1>
                        
                        Total Trips

                    </div>
                    <div class = "four">
                    <h1><?php echo $ct3?></h1>
                        Total Payment Receive

                    </div>
                   <div class = "clearfix"></div>
                    


            </div>
        </div>
        
<?php include('reuse/footer.php') ;
}
else{
    header('location:../adminlogin.php');

}




?>