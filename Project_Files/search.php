<?php
include('header.php');





/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


if (isset($_REQUEST["term"])) {
    $Name = $_REQUEST["term"] ;
    // Prepare a select statement
    $row = $sql = "SELECT * FROM trip_package WHERE Trip_Name LIKE ? ";

    if ($stmt = mysqli_prepare($link, $row)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);

        // Set parameters

         $param_term =  '%'.$_REQUEST["term"].'%' ;
       
        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            $search = $_REQUEST["term"];
            // Check number of rows in the result set
          
             {


                ?> 
                <div class="pricing1 py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center">

      <!-- Row  -->
      <div class="row mt-5">
        <!-- fetching data -->
        <h3 class="row justify-content-center"> Search Results </h3>

   <?php

                for ($i = 0; $i < count($arr); $i++) { ?>

          

            <div class="row mt-5">
<?php
             
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {?>
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





                    <?php } ?>

    <?php


            } else {
               // echo "<p>No matches found</p>";
            }
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }

}

// close connection
mysqli_close($link);
    ?>