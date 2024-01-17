<?php
include('header.php');


if (isset($_POST['search'])) {

   $Name = $_POST['search'];

   $row =  "SELECT * FROM trip_package WHERE Trip_Name LIKE  '%$Name%' or Tlocation like '%$Name%' or price <= '$Name' ORDER BY price,Starting_Date ASC";

   $ExecQuery = MySQLi_query($link , $row);

?>
   <div class="pricing1 py-5 bg-light">
   <div class="container">
     <div class="row justify-content-center">
 
       <!-- Row  -->
       <div class="row mt-5">
         <!-- fetching data -->
        
         
    <?php  if(mysqli_num_rows($ExecQuery)>0){
         ?> <h3 class="row justify-content-center"> Search Results </h3>

    <?php }else{
        echo "No Search Results found";
    }
 
                 for ($i = 0; $i < count($arr); $i++) { ?>
 
           
 
             <div class="row mt-5">
 <?php

   while ($row = MySQLi_fetch_array($ExecQuery)) {

 ?>
 <!-- Column -->

 <div class="col-lg-3 col-md-6" id="display">
   <div class="card text-center card-shadow on-hover border-0 mb-4">
     <img src=<?= $row['image'] ?> class="card-img-top" alt="Card image cap">
     <div class="card-body font-14">
       
       <h5 class="mt-3 mb-1 font-weight-medium"><?= $row['Trip_Name'] ?></h5>
       <h6 class="mt-3 mb-1 font-weight-normal">Location:<?= $row['Tlocation'] ?></h6>
       <h6 class="subtitle font-weight-normal">For <?= $row['Duration'] ?> Hour</h6>
       <div class="pricing my-3">
         <sup>৳</sup>
         <span class="monthly display-5"><?= $row['price'] ?></span>

         <span class="d-block">Save <span class="font-weight-medium">৳<?= $row['discount'] ?></span></span>
       </div>
       <ul class="list-inline">
         <li class="d-block py-2"><?= $row['Details'] ?></li>
         <li class="d-block py-2">All included</li>
         <p><b>Starting Date:</b> <?= $row['Starting_Date'] ?></p>
         <p><b>Ending Date:</b><?= $row['Ending_Date'] ?></p>


         <li class="d-block py-2">&nbsp;</li>
       </ul>
       <div class="bottom-btn">
         <a class="btn btn-danger-gradiant btn-md text-white btn-block" href="addcart.php?id=<?php echo $row['id']; ?>"><span>Add To Cart</span></a>
       </div>
     </div>
   </div>
 </div>

<?php  
 }     ?>

</div>
<!-- Done -->

 <?php  } 
} 
?>

