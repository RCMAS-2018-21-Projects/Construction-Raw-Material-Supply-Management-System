<?php
// Include config file
include ("admin/database.inc.php");
if(isset($_POST['signup']))
{

  $cust_email=$_POST['email'];
  $cust_name=$_POST['name'];
  $cust_city=$_POST['city'];
  $cust_street=$_POST['street'];
  $cust_district=$_POST['district'];
  $cust_pin=$_POST['pin'];
  $cust_phno=$_POST['phno'];
  $password=$_POST['password'];
  $conpwd=$_POST['conpwd'];
  $sql1 = "insert into tbl_login (email,usertype,password) values ('$cust_email','cust','$password')";
  $sql2 = "insert into tbl_customer (email,cust_name,cust_street,cust_city,cust_district,cust_pin,cust_phno) values ('$cust_email','$cust_name','$cust_street','$cust_city','$cust_district','$cust_pin','$cust_phno')";
    $rslt = mysqli_query($con,$sql1);
    $rslt = mysqli_query($con,$sql2);
if($rslt)
          {
               echo 'inserted successfully';
               header('location:index.php');  
          }
          else
         {
                echo 'insertion failed!!!!!  ' .mysqli_error($con);              
         }
}
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Login Form Design | CodeLab</title> -->
    <link rel="stylesheet" href="signinstyle.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">
Signup</div>
<form method="POST">
        <div class="field">
          <input type="text" placeholder="Email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter Valid Email" name="email" required>
        </div>
<div class="field">
            <input type="text" pattern="[A-Za-z]{1,32}" title="Enter Valid Name" placeholder="Fullname" name="name" required>
          </div>
<div class="field">
          <input type="password" placeholder="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
        </div>
<div class="field">
            <input type="password" placeholder="confirm password" name="conpwd" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
          </div>
<div class="field">
            <input type="text" pattern="[A-Za-z]{1,32}" title="Enter Valid street"  placeholder="Street" name="street" required>
          </div>
<div class="field">
            <input type="text" pattern="[A-Za-z]{1,32}" title="Enter Valid City" placeholder="City" name="city" required>
          </div>
<div class="field">
          <input type="text" placeholder="district" name="district" required >
          </div>  
          <div class="field">
          <input type="text" placeholder="pincode" data-mask="000000" pattern="[6]{1}[0-9]{5}" title="Enter Valid pincode" name="pin" required>
          </div> 
          <div class="field">
          <input type="text" placeholder="phonenumber" data-mask="0000000000" name="phno" pattern="[6-9]{1}[0-9]{9}" title="Enter Valid phone Number" required>
          </div>        
<div class="field">
            <br>
          <input type="submit" name="signup" value="Register">
        </div>
<div class="signup-link">
Already have an account? <a href="signin.php">Signin</a></div>
</form>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</html>
