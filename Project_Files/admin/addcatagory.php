<?php


include('reuse/menu.php'); 
 include('reuse/dbConn.php') ;
 if (isset($_SESSION['aemail'])) {?>
 <div class="w-100 p-3" style="background-color: #eee;">
   
    <div class="d-flex justify-content-center">
         <div class="wrapper2"><h1> Add Catagory</h1>    
           
           <br>

            <form method="post"> 
                <table class="table">
                    <tr>
                        <td>Title:
                        <input type="text" name="name" placeholder="Catagories Name">
                        </td>
                    <tr>
                    <tr>
                        <td>Active:
                        <input type="radio" name="active" value="1"> Yes
                        <input type="radio" name="active" value="2"> No
                        </td>
                    <tr>
                        <td colspan="20">
                                <input type="submit" name = "submit" class="btn btn-primary" value="Add Catagory"  />
                               

                          
                        </td>


                </table>

            </form>






   

<?php


    if(isset($_POST['submit'])){
        if(!empty($_POST['name']) && !empty($_POST['active']) ){
       $name =  $_POST['name'];
       $active = $_POST['active'];

       $query = "INSERT INTO catagory(c_name,c_active) 
            VALUES ('$name','$active')";
       
       if (mysqli_query($link, $query)) {
       $_SESSION['add'] = "Added Successfully";
       header("location:".'managecatagory.php');
      

   



     } else {
        $_SESSION['add'] = "Catagory Already Exists";
        header("location:".'managecatagory.php');

     }
    }else{
        echo "<p align='center'> <font color=blue  size='4pt'>All Fields Required</font> </p>";
     
        
    }
    mysqli_close($link);


}




?>
</div>
</div>
 </div>
 <?php }else{
        header('location:../adminlogin.php');
 }