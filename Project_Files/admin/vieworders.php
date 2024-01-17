<?php 





include('reuse/menu.php'); 
 include('reuse/dbConn.php') ;
 if (isset($_SESSION['aemail'])) {
 ?>
    <section class="py-5">

    </section>
    <div class="shopping-cart">
        <div class="px-4 px-lg-0">

            <div class="pb-5">
                <div>
                    <div class="row">
                        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                            <!-- My table -->
                            <div class="table-responsive ">
                                <table class="table">
                              
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="p-2 px-3 text-uppercase">Order Details</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="p-2 px-3 text-uppercase">Packages</div>
                                            </th>
                                            
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="p-2 px-3 text-uppercase">Qty</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Price</div>
                                            </th>

                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Date</div>
                                            </th>

                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Trn ID</div>
                                            </th>
                                        </tr>
                                        </thead>


                                    <?php



              
                 

           
               



                
                
                  $sql = "SELECT a.*, t.trip_name,t.image from orders a,trip_package t WHERE a.p_id = t.id order by t.trip_name";

                  


                  $res = mysqli_query($link, $sql);

               

                    while ($rows = mysqli_fetch_assoc($res)) {

                      $name =  $rows['trip_name'];
                      $qty = $rows['qty'];
                      $price = $rows['price'];
                      $image = $rows['image'];
                      $date = $rows['timestamp'];
                      $trn = $rows['payment_transaction'];
                      $bname = $rows['B_first_name'];
                      $phn = $rows['b_phone'];
                      $add = $rows['b_add'];

              
                   ?>


                                    
                                    <tbody>
                                        <tr>
                                        <td class="border-dark align-middle"><strong> Name: <?php echo $bname; echo " Phn: ". $phn; echo " ".$add; ?></strong></td>
                                            <th scope="row" class="border-dark">
                                                <div class="p-2">
                                                    <img src=<?php echo $image?> alt="" width="70" class="img-fluid rounded shadow-sm">
                                                    <div class="ml-3 d-inline-block align-middle">
                                                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?php echo $name ?></a></h5>
                                                    </div>
                                                </div>
                                          
                                            <td class="border-dark align-middle"><strong><?php echo $qty; ?></strong></td>
                                            
                                            <td class="border-dark align-middle"><strong><?php echo $price; ?></strong></td>
                                            <td class="border-dark align-middle"><strong><?php echo $date; ?></strong></td>
                                            <td class="border-dark align-middle"><strong><?php echo $trn; ?></strong></td>
                                             
                                            
                                           </th>
                                        </tr>
                                  
                                  

                                    </tbody>
                                    <?php } 
                                ?>
                                </table>

                            </div>
                            <!-- End -->
                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>
    <?php include('reuse/footer.php') ;


                    }else{
                        header('location:../adminlogin.php');
                    }

    ?>
   

    <!--Javascripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="https://geodata.solutions/includes/countrystate.js"></script>
    <script src="assets/js/slider.js"></script>
    </body>

    </html>