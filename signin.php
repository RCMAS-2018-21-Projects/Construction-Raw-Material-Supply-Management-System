
<?php
session_start();
 //include ("header.php");
include ("admin/database.inc.php");
include ("admin/function.inc.php");

$utype='';
$Username='';
$msg="";
$User_type='';
$u1="admin";
$u2="staff";
$u3="cust";
if(isset($_POST['submit'])){
    $Username=get_safe_value($_POST['email']);
    $password=get_safe_value($_POST['password']);
   
    
    $sql="select * from tbl_login where email='$Username' and password='$password' ";
    $res=mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    $row=mysqli_fetch_assoc($res);
    $usertype=$row['usertype'];
  
    
    //admin
    if($count>0 && $usertype==$u1 )
      { echo "Hello world";
        $_SESSION['IS_LOGIN']=true;
        $_SESSION['usertype']='admin';
        header("location:./admin/index.php"); 
      }
    //staff  
      else if($count>0 && $usertype==$u2)
    {
        $_SESSION['IS_LOGIN']=true;
        $_SESSION['usertype']='staff';
        $_SESSION['s_id']=$Username;
        header("location:./admin/index.php");
    }
    //customer
        else if($count>0 && $usertype==$u3)
    {
        $_SESSION['IS_LOGIN']=true;
       $_SESSION['user_id']=$Username;
       header("location:index.php");
    }
       
        
    else {
        
        echo "<script>";
        echo "alert('this account does not exist')";
        echo "</script>";
        $msg="Please enter valid login details";
    }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="signinstyle.css">
  </head>
  <body>
  <div>
  <!doctype html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png"> 
    <title> Construction</title>
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
<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu row m0">
           <div class="container">
               <div class="float-left">
                <a class="dn_btn" href=""><i class="ti-mobile"></i>+1 (205) 325-1235</a>
                <span class="dn_btn"> <i class="ti-location-pin"></i> 4256 Marshville Road, Poughkeepsie, NY 12601</span>
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
              <a class="navbar-brand logo_h" href="index.php"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li> 
                    <li class="nav-item active"><a class="nav-link" href="about-us.php">About</a></li> 
                    <li class="nav-item"><a class="nav-link" href="service.php">services</a></li> 
                    <li class="nav-item"><a class="nav-link" href="product.php">product</a></li>    
              <!-- <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li> -->
          </ul>
      </div>
      <div class="right-button">
        <ul>
        </ul>
    </div> 
</div>
</nav>

</div>
</header>
  <div>
    <div class="wrapper">
      <div class="title">
Login</div>
<form method="POST">
        <div class="field">
          <input type="text" name="email" placeholder="Email address" required>
        </div>
<div class="field">
          <input type="password" name="password" placeholder="password" required>
        </div>
<div class="content">
<div class="pass-link">
<a href="#">Forgot password?</a>
</div>
</div>
<div class="field">
          <input type="submit" name="submit" value="Login" >
          <p style="color:red"><?php echo $msg ?></p>
        </div>
<div class="signup-link">
Not a member? <a href="registeration.php">Signup now</a></div>

</form>
<!-- <div class="login_msg"></?php echo $msg?></div> -->
</div>
</body>
</html>
