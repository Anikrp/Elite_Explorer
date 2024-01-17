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
        $sql = "SELECT *From catagory WHERE c_id = $id";

        $res = mysqli_query($link, $sql);

        if ($res == true) {
            $count = mysqli_num_rows($res);
            if ($count == 1) {

                $row = mysqli_fetch_assoc($res);
                $c_name = $row['c_name'];
                $c_active = $row['c_active'];
            } else {
                header("location:" . 'managecatagory.php');
            }
        }




        ?>


        <form method="post">
            <table>

                <tr>
                    <td>
                        Catagory Name
                    </td>
                    <td>
                        <input type="text" name="name" value="<?php echo $c_name ?>">

                    </td>
                </tr>

                <tr>
                    <td>
                        Update Active Status
                    </td>
                    <td>
                        <input type="radio" name="active" value="1"> Yes
                        <input type="radio" name="active" value="2"> No

                    </td>
                </tr>
                <tr>
                    <td>
                    Current Status:
                    </td>
                       <input type="hidden" name="id" value="<?php echo $id ?>">
                   
                     <td>
                       <?php if ($row['c_active'] == 1) echo 'Activate';
                                        else echo 'Deactivate'; ?>    </td>
                        <br> <br>
                        <input type="submit" name="submit" value="Update Catagory" class="btn btn-secondary">



                
                </tr>

            </table>
        </form>
    </div>
</div>
<?php


if (isset($_POST['submit'])) {
    if (!empty($_POST['name']) && !empty($_POST['active'])) {


        $name =  $_POST['name'];
        $active = $_POST['active'];



        //$name =  $_POST['name'];
        //$active = $_POST['active'];

        $sql = "UPDATE catagory SET
        c_name = '$name',
        c_active = '$active'
        WHERE c_id = '$id'
        ";



        $res = mysqli_query($link, $sql);


        if ($res == true) {

            $_SESSION['update'] = "Updated Successfully";
            header("location:" . 'managecatagory.php');
        } else {
            $_SESSION['add'] = "Catagory Already Exists";
            header("location:" . 'managecatagory.php');
        }
    } else {
        echo "All Fields Required";
    }
}


?>

<?php include('reuse/footer.php');}else{
        header('location:../adminlogin.php');
} ?>