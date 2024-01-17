<?php
include('reuse/menu.php');
include('reuse/dbConn.php');
 if (isset($_SESSION['aemail'])) {
?>
<br />
<br />
<?php
if (isset($_SESSION['add'])) {
    echo $_SESSION['add'];
    unset($_SESSION['add']);
}
if (isset($_SESSION['delete'])) {
    echo $_SESSION['delete'];
    unset($_SESSION['delete']);
}
if (isset($_SESSION['update'])) {
    echo $_SESSION['update'];
    unset($_SESSION['update']);
}
?>
<div class="w-auto p-3" style="background-color: #eee;">
    <div class="content">
        <h1><a href="addcatagory.php" class="btn btn-primary">ADD Catagory </h1></a>
    </div>

    <div class="d-flex justify-content-center">
        <table>
        <thead class="bg-light">
            <tr>
                <th>
                    Serial No
                </th>
                <th>
                    Catagory Name
                </th>
                <th>
                    Active Status
                </th>
                <th>
                    
                </th>
               
            </tr>
        </thead>

            <?php
            $sql = "SELECT * from catagory";

            $res = mysqli_query($link, $sql);

            if ($res == true) {
                $count = mysqli_num_rows($res);
            }
            if ($count > 0) {

                $sn = 1;

                while ($rows = mysqli_fetch_assoc($res)) {
                    $id = $rows['c_id'];
                    $c_name = $rows['c_name'];
                    $c_active = $rows['c_active'];

            ?>
                    <tr>
                        <th><?php echo $sn++ ?></th>
                        <th><?php echo $c_name ?></th>
                        <th><?php if ($c_active == 2) echo "Deactivate";
                            else echo "Activate"; ?></th>

                        <th>
                            <a href="updateCatagory.php?id=<?php echo $id; ?>" class="btn btn-secondary"> Update Catagory</a>


                            <a href="deleteCatagory.php?id=<?php echo $id; ?> " class="btn btn-danger"> Delete Catagory</a>
                        </th>

                    </tr>

            <?php



                }
            }
            ?>



        </table>
    </div>
</div>


<?php include('reuse/footer.php') ;}else{
        header('location:../adminlogin.php');
}?>