<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Elite Explorer</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="assets/css/cards.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/slider.css">
  <link rel="stylesheet" href="assets/css/review.css">
  <link rel="stylesheet" href="edit-profile.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">


  <?php
  include('admin/reuse/dbConn.php');

  $sql = "SELECT * FROM catagory WHERE c_active = 1";
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

  
  <style>




.form{

    position: relative;
}

.form .fa-search{

    position: absolute;
    top:20px;
    left: 20px;
    color: #9ca3af;

}

.form span{

    position: absolute;
    right: 17px;
    top: 13px;
    padding: 2px;
    border-left: 1px solid #d1d5db;

}

.left-pan{
    padding-left: 7px;
}

.left-pan i{
   
   padding-left: 10px;
}

.form-input{

    height: 55px;
    text-indent: 33px;
    border-radius: 10px;
}

.form-input:focus{

    box-shadow: none;
    border:none;
}
    icon-shape {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      vertical-align: middle;
    }

    .icon-sm {
      width: 2rem;
      height: 2rem;

    }
    html {
      scroll-behavior: smooth;
    }

    .dropbtn {
      background-color: #04AA6D;
      color: black;
      padding: 16px;
      font-size: 16px;
      border: none;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 8px 12px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: #3e8e41;
    }

    .card-img-top {
      width: 100%;
      height: 15vw;
      object-fit: cover;
    }


    /* ----- User Nav Dropdown -----*/

  

    .nav-user-dropdown {
      padding: 0px;
      min-width: 230px;
      margin: 0px;
    }

 

    .nav-user-info {
      background-color: #5969ff;
      line-height: 1.4;
      padding: 12px;
      color: #fff;
      font-size: 13px;
      border-radius: 2px 2px 0 0;
    }

    .nav-user-info .status {
      float: left;
      top: 7px;
      left: 0px;
    }

   

    .nav-user-dropdown .dropdown-item {
      display: block;
      width: 100%;
      padding: 12px 22px 15px;
      clear: both;
      font-weight: 400;
      color: #686972;
      text-align: inherit;
      white-space: nowrap;
      background-color: transparent;
      border: 0;
      font-size: 13px;
      line-height: 0.4;
    }

    .nav-user-dropdown .dropdown-item:hover {
      background-color: #f7f7fb;
    }

    /*---- User icon sizes ---*/

    .user-avatar-xxl {
      height: 128px;
      width: 128px;
    }

    .user-avatar-xl {
      height: 90px;
      width: 90px;
    }

    .user-avatar-lg {
      height: 48px;
      width: 48px;
    }

    .user-avatar-md {
      height: 32px;
      width: 32px;
    }

    .user-avatar-sm {
      height: 24px;
      width: 24px;
    }

    .user-avatar-xs {
      height: 18px;
      width: 18px;
    }



    .avatar {
      width: 2.25rem;
      height: 2.25rem;
      border-radius: 50%;
      border: 2px solid #F7F9FA;
      background: #F7F9FA;
      color: #fff;
    }


    .media-attachment div.avatar {
      border: none;
    }

    .avatar.bg-primary {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .avatar.bg-primary i {
      font-size: 14px;
    }
  </style>
  <script src="https://kit.fontawesome.com/ddcab0c1fe.js" crossorigin="anonymous"></script>
</head>

<body style="/*background: url(&quot;design.jpg&quot;);*/background-position: 0 -60px;">
  <!--navbar-->
  <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
    <div class="container">
      <!--navbar logo-->
      <a class="navbar-brand d-flex align-items-center" href="/"><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
            <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"></path>
            <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
          </svg></span><span>Elite Explorer</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="packages.php">Packages</a></li>


          <div class="dropdown">
            <li class="nav-item"><a class="nav-link" href="#">Category</a>
              <div class="dropdown-content">


                <?php
                for ($i = 0; $i < count($arr); $i++) { ?>



                  <ul><a href="<?php echo "#" . $arr[$i]; ?>"><?php echo  $t = $arr[$i]; ?></a></ul>
                <?php }

                ?>
              </div>
          </div>
          <li class="nav-item"><a class="nav-link " href="services.php">Services</a></li>
          <li class="nav-item"><a class="nav-link " href="review.php">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="contacts.php">Contacts</a></li>





        </ul>





        <a class="nav-link" role="button" href="cart.php">Cart</a>
      

        <?php

        if (isset($_SESSION['email'])) { 
          $e_mail = $_SESSION['email'];
          
          $result = mysqli_query($link, "SELECT dp from  users WHERE email = '$e_mail' ");
          $rows = mysqli_fetch_assoc($result); 
          
          $logo_file_path = $rows['dp'];

          $path = preg_replace('/\s+/', '', 'uploads/' . $logo_file_path);
          
          ?>
          
        
          <div class="dropdown">
          <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $path?> " alt="" class="user-avatar-lg rounded-circle"></a>
          <div class="dropdown-content">
          <a class="dropdown-item" href="profile.php"><i class="fas fa-user mr-2"></i> Account</a>
          <a class="dropdown-item" href="myorders.php"><i class="fa-solid fa-bag-shopping"></i> Myorders</a>
          <a class="dropdown-item" href="userlogout.php"><i class="fas fa-power-off mr-2"></i> Logout</a>
        </div>

        </div>
          
          <?php
          
          
          
          } else {  ?>
          
          <a class="btn btn-primary shadow" role="button" href="login.php">Log in</a>
          
          
          <?php
          
          
          } ?>






      </div>
    </div>
    </div>
  </nav>