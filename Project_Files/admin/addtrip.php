<?php

include('reuse/menu.php');
include('reuse/dbConn.php');
if (isset($_SESSION['aemail'])) {
$sql = "SELECT * FROM catagory";
$res = mysqli_query($link, $sql);

if ($res == true) {
    $count = mysqli_num_rows($res);
}


?>
<?php
$x = 0;
$arr = array();
$arr2 = array();
while ($rows = mysqli_fetch_array($res)) {
    $arr[$x] = $rows[1];
    $arr2[$x] = $rows[0];
    ++$x;
}



?>
<div class="w-100 p-3" style="background-color: #eee;">
    <div class="d-flex justify-content-center">
        <h1> Add Trip</h1>

        <div class="addtrip">


            <form method="post">
                <table class="table table-hover">

                    <tr>
                        <td>Catagory:

                        </td>

                        <td>
                            <select name="s_id">

                                <?php
                                for ($i = 0; $i < count($arr); $i++) { ?>

                                    <option value=<?php echo  $t = $arr2[$i]; ?>><?php echo $arr[$i]; ?></option>;
                                <?php }

                                ?>
                            </select>


                        </td>







                    </tr>
                    <td>Trip Name:</td>
                    <td> <input type="text" name="t_name" placeholder="Trip Name">

                    </td>
                    </tr>
                    <tr>

                        <td>Trip Location: </td>
                        <td> <input type="text" name="t_location" placeholder="Trip Location"></td>

                    </tr>

                    <tr>
                        <td>Trip Capacity: </td>
                        <td> <input type="number" min="1" name="t_capacity" placeholder="Trip Capacityy"></td>


                    <tr>
                        <td>Starting Date: </td>
                        <td> <input type="date" name="s_date" placeholder="Starting Date"></td>
                    </tr>

                    <tr>

                        <td>Ending Date: </td>
                        <td> <input type="date" name="e_date" placeholder="Ending Date">
                        </td>
                    </tr>


                    <tr>
                        <td>Trip Duration:</td>
                        <td> <input type="number" min="1" name="t_duration" placeholder="Duration in Hours">
                        </td>
                    </tr>

                    <tr>

                        <td>Trip Details: </td>

                        <td> <input type="text" name="t_details" placeholder="Details">
                        </td>
                    </tr>
                    <tr>
                        <td>Package Price:</td>
                        <td> <input type="number" min="1" name="t_price" placeholder="Package Price">
                        </td>
                    </tr>
                    <tr>
                        <td>Discount:</td>
                        <td><input type="number" min="1" name="t_discount" placeholder="Package Price">
                        </td>
                    </tr>
                    <tr>
                        <td>Image Url:</td>
                        <td>
                            <input type="text" name="t_image_url" placeholder="Image URL">
                        </td>
                    </tr>



                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Trip" class="btn btn-secondary" />
                    </td>


                </table>

            </form>





        </div>
    </div>
</div>

<?php


if (isset($_POST['submit'])) {
    if (
        !empty($_POST['t_name']) && !empty($_POST['t_location']) && !empty($_POST['t_capacity']) && !empty($_POST['s_date']) &&
        !empty($_POST['e_date']) &&
        !empty($_POST['t_duration']) &&
        !empty($_POST['t_details']) &&
        !empty($_POST['t_price']) &&
        !empty($_POST['t_discount']) &&
        !empty($_POST['t_image_url'])
    ) {

        $t_cat = $_POST['s_id'];
        $name =  $_POST['t_name'];
        $location = $_POST['t_location'];
        $capacity = $_POST['t_capacity'];
        $s_date = $_POST['s_date'];
        $e_date = $_POST['e_date'];
        $t_duration = $_POST['t_duration'];
        $t_details = $_POST['t_details'];
        $price = $_POST['t_price'];
        $dis = $_POST['t_discount'];
        $url = $_POST['t_image_url'];


        $query = "INSERT INTO trip_package(catagory,Trip_Name,Tlocation,Vacancy,Starting_Date,Ending_Date,Duration,Details,price,discount,image) 
           VALUES ('$t_cat','$name','$location','$capacity','$s_date','$e_date','$t_duration','$t_details','$price','$dis','$url')";
        if (mysqli_query($link, $query)) {
            echo "<p align='center'> <font color=blue  size='6pt'>ADDED SUCCESSFULLY </font> </p>";
        }
    } else {
        echo "<p align='center'> <font color=blue  size='4pt'>All Fields Required</font> </p>";
    }
}




}else{
    header('location:../adminlogin.php');
}?>