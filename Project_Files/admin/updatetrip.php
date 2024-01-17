<?php 


include('reuse/menu.php');
include('reuse/dbConn.php');
if (isset($_SESSION['aemail'])) {
?>

    <div class="content">
        <div class="wrapper">
    <h1>Update Category</h1>



    <?php

        $id = $_GET['id'];
        $sql = "SELECT * FROM trip_package WHERE id = $id";

        $res = mysqli_query($link,$sql);

        if($res == true) {
            $count = mysqli_num_rows($res);
            if($count == 1) {
                
                
                    $rows = mysqli_fetch_assoc($res);
                


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
                  


            }else{
                header("location:".'manage-trip.php');

            }
        }

        


    ?>
   

    <form method="post">
         <table class="tbl-30">
       
        <tr>
            <td>
                Trip Name
            </td>
            <td>
                <input type="text" name="name" value="<?php echo $name?>">

            </td>
        </tr>
        <tr>
            <td>
                Trip Location
            </td>
            <td>
                <input type="text" name="location" value="<?php echo $location?>">

            </td>
        </tr>
        <tr>
            <td>
                Capacity
            </td>
            <td>
                <input type="number" min="1" name="capacity" value="<?php echo $capacity?>">

            </td>
        </tr>
        <tr>
            <td>
                Starting Date
            </td>
            <td>
                <input type="date" name="sdate" value="<?php echo $sdate?>">

            </td>
        </tr>
        <tr>
            <td>
                Ending_Date
            </td>
            <td>
                <input type="date" name="edate" value="<?php echo $edate?>">

            </td>
        </tr>

        <tr>
            <td>
                Duration
            </td>
            <td>
                <input type="number" min = "1" name="tdeuration" value="<?php echo $tduration?>">

            </td>
        </tr>
        <tr>
            <td>
                Package Details
            </td>
            <td>
                <input type="text" name="tdetails" value="<?php echo $tdetails?>">

            </td>
        </tr>
        <tr>
            <td>
                Package Price
            </td>
            <td>
                <input type="number" min = "1" name="pprice" value="<?php echo $pprice?>">

            </td>
        </tr>
        <tr>
            <td>
                Discount
            </td>
            <td>
                <input type="number" min = "1" name="dis" value="<?php echo $dis?>">

            </td>
        </tr>
        <tr>
            <td>
                Image Url
            </td>
            <td>
                <input type="text" name="url" value="<?php echo $url?>">

            </td>
        </tr>


        <tr>
                <td colspan="2">
                    <input type="hidden" name="xid" value="<?php echo $id?>">
                    <input type="submit" name = "submit" value="Update Trip" class = "btn btn-primary">
                 


                </td>
        </tr>
       
        </table>
    </form>
    </div> 
    </div>
<?php
  

   if(isset($_POST['submit'])){


    if(!empty($_POST['name']) && !empty($_POST['location']) && !empty($_POST['capacity']) && !empty($_POST['sdate']) &&
    !empty($_POST['edate'])&&
    !empty($_POST['tdeuration'])&&
    !empty($_POST['tdetails'])&&
    !empty($_POST['pprice'])&&
    !empty($_POST['dis'])&&
    !empty($_POST['url']) ){



         $tcat = $_POST['xid'];
         $name =  $_POST['name'];
         $location = $_POST['location'];
         $capacity = $_POST['capacity'];
         $sdate = $_POST['sdate'];
         $edate = $_POST['edate'];
         $tduration = $_POST['tdeuration'];
         $tdetails = $_POST['tdetails'];
         $pprice = $_POST['pprice'];
         $dis = $_POST['dis'];
         $url = $_POST['url'];

        $sql = "UPDATE trip_package SET
        Trip_Name = '$name',
        Tlocation = '$location',
        Vacancy = '$capacity',
        Starting_Date = '$sdate',
        Ending_Date = '$edate',
        Duration = '$tduration',
        Details = '$tdetails',
        price = '$pprice',
        discount = '$dis',
        image = '$url'
        WHERE id = '$id'
        ";


        $res = mysqli_query($link,$sql);
     

    if($res == true){

       $_SESSION['update'] = "Updated Successfully";
      header("location:".'manage-trip.php');

    }else{
        $_SESSION['add'] = "All Fields Required";
        header("location:".'updatetrip.php');

    }}else{
        echo "All Fields Required";
     
        
    }






   }


?>

<?php include('reuse/footer.php') ;}else{
    header('location:../adminlogin.php');}
?>