<?php
session_start();
require_once "admin/database.inc.php";
$name='';
//print_r($_SESSION);
if(isset($_SESSION['user_id']))
{
$sql1 = "select * from tbl_customer where email='".$_SESSION['user_id']."'";
$res1 = mysqli_query($con,$sql1);
$row = mysqli_fetch_array($res1);
$name=$row['cust_name'];
$c_id=$row['cust_id'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/banner/about1.png" type="image/png">
    <title>Construction</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body style="overflow-x:hidden">

    <!--================Header Menu Area =================-->
    <header class="header_area">
         <div class="top_menu row m0">
           <div class="container">
               <div class="float-left">
                <a class="dn_btn" href=""><i class="ti-mobile"></i>9843422834</a>
                <span class="dn_btn"> <i class="ti-location-pin"></i> 25th floor Rajadhani building Kochi,Ernakulam</span>
            </div>
            <div class="float-right">
                <span class="follow_us">Follow us: </span>
                <ul class="list header_social">
                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                    <li><a href="#"><i class="ti-skype"></i></a></li>
                    <li><a href="#"><i class="ti-vimeo"></i></a></li>
                </ul>	
            </div>
        </div>	
    </div>
    <div class="main_menu">
       <nav class="navbar navbar-expand-lg navbar-light">
           <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <a class="navbar-brand logo_h" href="index.php"><!--<img src="img/banner/about1.png" alt="image/png" style="width:100px;height:90px;">---></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
             <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="nav-contents">
             <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
                    <li class="nav-item"><a class="nav-link" href="about-us.php">About</a></li> 
                    <li class="nav-item"><a class="nav-link" href="service.php">services</a></li> 
                    <li class="nav-item submenu dropdown">
                    <a onclick="parent.location='product.php'" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product</a>
                        <ul class="dropdown-menu">
                            <?php
                            include('admin/database.inc.php'); 
                            $sel="select * from tbl_category";
                            $v=mysqli_query($con,$sel) or die(mysqli_error($con));
                            while($row=mysqli_fetch_assoc($v)){

                            ?>
                            <li class="nav-item"><a class="nav-link" onclick="location.href='eachproduct.php?cat_id=<?php echo $row['cat_id'];?>'"><?php echo $row['cat_name']; ?></a></li>
                        <?php } ?> 
                        </ul>
                    </li>  
                    <?php
                    if(isset($_SESSION['user_id'])){
                    ?>
                    <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
                        <ul class="dropdown-menu">  
                        <li class="nav-item"><a class="nav-link" href="account.php">My profile</a></li> 
                        <li class="nav-item"><a class="nav-link" href="youorder.php">My orders</a></li> 
                        </ul>
                        </li>
                            <?php } ?>  
                </ul>
            </div>
        </div>
            <div class="right-button">
                <ul>
                    <!-- <li class="search-icon"><input type="text" class="textbar" style="max-width:100px;"><i class="fas fa-search" style="margin-left:10px;"></i></li> -->
                    <div class="buttn">
                    <?php
                    if (isset($_SESSION['user_id'])) 
              {
                  
             echo '<div class="space"><li class="shop-icon"><a href="cart.php"><i class="ti-shopping-cart-full"></i></a></li></div>
              <div class="urus"><form action="signout.php" method="POST"><button class="boxed-btn3" name="signout">SignOut</button></form></div>';
              }
              else
              {
                echo'<a href="signin.php" class="boxed-btn3">signin</a>
                <a href="registeration.php" class="boxed-btn3">signup</a>';
              }
              ?>
              </div>
                    <!-- <a href="signin.php" class="boxed-btn3">signin</a>
                    <a href="registeration.php" class="boxed-btn3">signup</a> -->
                    </div>
                    
        
                </ul>

            </div> 
        </div>
    </nav>

</div>

</header>