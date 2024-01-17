<?php 
include('reuse/menu.php');
include('reuse/dbConn.php');

if (isset($_SESSION['aemail'])) {
 ?>
<br/>
<br/>
<?php 
    if(isset($_SESSION['add'])){
        echo $_SESSION['add'];
        unset($_SESSION['add']);
  
    }
    if(isset($_SESSION['delete'])){
        echo $_SESSION['delete'];
         unset($_SESSION['delete']);
   
     }
     if(isset($_SESSION['update'])){
        echo $_SESSION['update'];
         unset($_SESSION['update']);
   
     }
?>

<div class="d-flex justify-content-center"><h1>SITE USERS </h1></a></div>


<div class="d-flex justify-content-center">
<table >
<thead class="bg-light">    
    <tr>
            <th>
                Serial No
            </th>
            <th>
                Full Name
            </th>
            <th>
                Email
            </th>
            <th>
                Phone Number
            </th>
            <th>
                Address
            </th>
            <th>
                NID
            </th>
            <th>
                Gender
            </th>
            <th>
                Blood Group
            </th>
            <th>
                Action
            </th>
            
        </tr>
</thead>
        <?php
            $sql = "SELECT * from users";

            $res = mysqli_query($link,$sql);

            if($res == true){
                $count = mysqli_num_rows($res);

            }
            if($count > 0 ){

                $sn = 1;

                while($rows = mysqli_fetch_assoc($res))
                {
                    $id = $rows['id'];
                    $name = $rows['full_Name'];
                    $email = $rows['email'];
                    $phnN = $rows['phone_number'];
                    $add = $rows['address'];
                    $nid = $rows['nid'];
                    $gender = $rows['gender'];
                    $blood_g = $rows['blood_group'];
                    
                    ?>
                        <tr>
                             <th><?php echo $sn++ ?></th>
                            
                             <th><?php echo $name?></th>
                             <th><?php echo $email?></th>
                             <th><?php echo $phnN?></th>
                             <th><?php echo $add?></th>
                             <th><?php echo $nid?></th>
                             <th><?php echo $gender?></th>
                             <th><?php echo $blood_g?></th>
                             
        
                             <td>
                               
            
        
                                    <a href = "deleteuser.php?id=<?php echo $id; ?> " class = "btn btn-danger"> <b>Delete</b></a>
                            </td>

                         </tr>

                    <?php



                }


            }
        ?>



        </table>
</div>

   
        
<?php include('reuse/footer.php') ;
}else{
header('location:../adminlogin.php');
}?>