<?php

include('reuse/menu.php');
include('reuse/dbConn.php');
if (isset($_SESSION['aemail'])) {
?>
<br />
<br />
<?php
if (isset($_SESSION['madd'])) {
    echo $_SESSION['madd'];
    unset($_SESSION['madd']);
}
if (isset($_SESSION['update'])) {
    echo $_SESSION['update'];
    unset($_SESSION['update']);
}
if (isset($_SESSION['delete'])) {
    echo $_SESSION['delete'];
    unset($_SESSION['delete']);
}

?><meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="w-auto p-3" style="background-color: #eee;">
    <div class="padding"></div>
    <div class="d-flex justify-content-center" </div>
        <h1><a href="addtrip.php" class="btn btn-primary">Add Trip</h1></a>
    </div>


    <div class="d-flex justify-content-center">
        <table class="">
            <tr>
                <thead class="bg-light">
                    <th>
                        S.No.
                    </th>
                    <th>
                        Catagory
                    </th>
                    <th>
                        Trip Name
                    </th>
                    <th>
                        Location
                    </th>
                    <th>
                        Capacity
                    </th>
                    <th>
                        Starting Date
                    </th>
                    <th>
                        Ending Date
                    </th>
                    <th>
                        Duration
                    </th>
                    <th>
                        Package Details
                    </th>
                    <th>
                        Package Price
                    </th>
                    <th>
                        Discount
                    </th>
                    <th>
                        Image
                    </th>
                    <th>
                        Action
                    </th>
                </thead>
            </tr>

            <?php
            $sql = "SELECT b.*,a.c_name FROM trip_package b,catagory a WHERE b.catagory = a.c_id ORDER BY a.c_name ASC;";

            $res = mysqli_query($link, $sql);

            if ($res == true) {
                $count = mysqli_num_rows($res);
            }

            if ($count > 0) {

                $sn = 1;

                while ($rows = mysqli_fetch_assoc($res)) {




                    $tid = $rows['id'];


                    $tcat = $rows['catagory'];
                    $name =  $rows['Trip_Name'];
                    $location = $rows['Tlocation'];
                    $capacity = $rows['Vacancy'];
                    $sdate = $rows['Starting_Date'];
                    $edate = $rows['Ending_Date'];
                    $tduration = $rows['Duration'];
                    $tdetails = $rows['Details'];
                    $pprice = $rows['price'];
                    $dis = $rows['discount'];
                    $url = $rows['image'];
                    $catagoryname = $rows['c_name'];









            ?>
                    <tr>
                        <th><?php echo $sn++ ?></th>
                        <th><?php echo $catagoryname ?></th>
                        <th><?php echo $name ?></th>
                        <th><?php echo $location ?></th>
                        <th><?php echo $capacity ?></th>
                        <th><?php echo $sdate ?></th>
                        <th><?php echo $edate ?></th>
                        <th><?php echo $tduration ?></th>
                        <th><?php echo $tdetails ?></th>
                        <th><?php echo $pprice ?></th>
                        <th><?php echo $dis ?></th>
                        <th><img src="<?php echo $url ?>" alt="https://media.istockphoto.com/photos/young-man-arms-outstretched-by-the-sea-at-sunrise-enjoying-freedom-picture-id1285301614?b=1&k=20&m=1285301614&s=170667a&w=0&h=tDEC2-p91cZiNU5C19sVhB9L08PmaH5wIijCvRDalCI=" style="width:240px;height:180px;"></th>
                        <!-- <td><img src = "https://cdn.pixabay.com/photo/2018/07/13/06/06/bangladesh-3535023__340.jpg?>"></td>-->


                        <td>
                            <a href="updatetrip.php?id=<?php echo $tid; ?>" class="btn btn-primary">Update</a> <br></br>


                            <a href="deletetrip.php?id=<?php echo $tid; ?> " class="btn btn-primary">Delete</a>
                        </td>


                    </tr>

            <?php



                }
            }
            ?>



        </table>
    </div>
</div>

</div>


<?php include('reuse/footer.php') ;}else{
        header('location:../adminlogin.php');
}?>