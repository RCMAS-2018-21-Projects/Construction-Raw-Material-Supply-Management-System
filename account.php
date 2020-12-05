<?php 
ob_start();
include('header.php'); 

if(isset($_SESSION['IS_LOGIN']))
{
  $q=$_SESSION['user_id'];

}
   else{
header("location:signin.php");

   }

$cust_id='';


   $msg='';

 if(isset($_POST['ad-bt']))
 {
 	
 	$name=$_POST['cust_name'];
  $street=$_POST['cust_street'];
 	$City=$_POST['cust_city'];
 	$district=$_POST['cust_district'];
  $pincode=$_POST['cust_pin'];
  $phno=$_POST['cust_phno'];
  $s="Update tbl_customer set cust_name='$name',cust_street='$street',cust_city='$City',cust_district='$district',cust_pin='$pincode',cust_phno='$phno' where email='$q'";
    $res=mysqli_query($con,$s);
    if(!$res)
    {
    	echo "error".mysqli_error($con);
    	die();
    }
    else
    {
    	$msg='profile updated successfully';
    }
 }?>
<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0">
                <a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
                <strong class="text-black">Account</strong>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
                <h2 class="h3 mb-3 text-black">Account Details</h2>
                <div class="p-3 p-lg-5 border">
                    <div class="form-group">

                    </div>
                    <?php
		$s="select * from tbl_customer where email='$q'";
      $rez=mysqli_query($con,$s);
               if(!$rez)
               {
                echo "error".mysqli_error($con);
                die();
               }
	
		$r=mysqli_fetch_assoc($rez);
		?>
                    <div class="form-group row">
                        <div class="col-md-6">

                            <form method="POST">
                                <label for="c_fname" class="text-black">Name <span class="text-danger"></span></label>
                                <input type="text" pattern="[A-Za-z]{1,32}" title="Enter Valid Name" class="form-control" id="c_fname" name="cust_name"
                                    value="<?php  echo $r['cust_name'];?>">
                        </div>
                        <div class="col-md-6">


                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">

                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="c_address" class="text-black">street <span class="text-danger"></span></label>
                            <input type="text" class="form-control" id="c_address" name="cust_street"
                                placeholder="Street" value="<?php  echo $r['cust_street'];?>">
                        </div>
                    </div>

                    <div class="form-group">
                    <label for="c_city" class="text-black">City <span class="text-danger"></span></label>
                        <input type="text" class="form-control" placeholder="city" name="cust_city"
                            value="<?php  echo $r['cust_city'];?>">
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_state_country" class="text-black">district<span
                                    class="text-danger"></span></label>
                            <input type="text" class="form-control" id="c_state_country" name="cust_district"
                                value="<?php  echo $r['cust_district'];?>">
                        </div>
                        <div class="col-md-6">
                            <label for="c_postal_zip" class="text-black">Posta / Zip <span
                                    class="text-danger"></span></label>
                            <input type="text" class="form-control" data-mask="000000" pattern="[6]{1}[0-9]{5}" title="Enter Valid pincode" id="c_postal_zip" name="cust_pin"
                                value="<?php  echo $r['cust_pin'];?>">
                        </div>
                    </div>

                    <div class="form-group row mb-5">
                        <div class="col-md-6">
                            <label for="c_phone" class="text-black">Phone <span class="text-danger"></span></label>
                            <input type="text" class="form-control" data-mask="0000000000" id="c_phone" name="cust_phno"
                                placeholder="Phone Number" value="<?php  echo $r['cust_phno'];?>">
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                    <button type="submit" name="ad-bt" class="btn btn-primary btn-lg btn-block">EDIT</button>
                    <p style="color:red"><?php echo $msg; ?></p>
                    <div class="form-group">
                        </form>

                        <div class="collapse" id="create_an_account">
                            <div class="py-2">

                                <div class="form-group">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Bioderma <strong class="mx-2">x</strong> 1</td>
                        <td>$55.00</td>
                      </tr>
                      <tr>
                        <td>Ibuprofeen <strong class="mx-2">x</strong> 1</td>
                        <td>$45.00</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                        <td class="text-black">$350.00</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong>$350.00</strong></td>
                      </tr>
                    </tbody>
                  </table> -->


        <!--<div class="border mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button"
                        aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>
    
                    <div class="collapse" id="collapsebank">
                      <div class="py-2 px-4">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                          payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div> -->

        <!-- <div class="border mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button"
                        aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>
    
                    <div class="collapse" id="collapsecheque">
                      <div class="py-2 px-4">
                        <p class="mb-0">ahdhalsdka</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="border mb-5">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button"
                        aria-expanded="false" aria-controls="collapsepaypal">cash on delivery</a></h3>
    
                    <div class="collapse" id="collapsepaypal">
                      <div class="py-2 px-4">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                          payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div> -->

        <!-- <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='thankyou.php'">Place
                      Order</button>
                  </div> -->

    </div>
</div>
</div>

</div>
</div>
<!-- </form> -->
</div>
</div>
</div>
<footer class="footer-area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-4  col-md-6">
                <div class="single-footer-widget">
                    <h6>Userful Links</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="footer-nav">
                                <li><i class="ti-angle-right"></i>
                                    <a href="#">home</a>
                                </li>
                                <li><i class="ti-angle-right"></i>
                                    <a href="#">about us</a>
                                </li>
                                <li><i class="ti-angle-right"></i>
                                    <a href="#">company news</a>
                                </li>
                                </li>
                            </ul>

                        </div>
                        <div class="col-lg-6">
                            <ul class="footer-nav">
                                <li><i class="ti-angle-right"></i>
                                    <a href="#">our services</a>
                                </li>
                                <li><i class="ti-angle-right"></i>
                                    <a href="#">terms and condition</a>
                                </li>
                                <li><i class="ti-angle-right"></i>
                                    <a href="#">shop</a>
                                </li>
                                <li><i class="ti-angle-right"></i>
                                    <a href="#">contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4  col-md-12">
                <div class="single-footer-widget newsletter">
                    <h6>email Newsletter</h6>
                    <div id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">

                            <div class="form-group row no-gutters">
                                <div class="col-lg-8 col-md-8 col-7">
                                    <input name="email" placeholder="Your cust_id Address"
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Your cust_id Address '" required="">
                                </div>

                                <div class="col-lg-4 col-md-4 col-5">
                                    <button class="nw-btn main_btn circle">subscribe
                                        <span class="lnr lnr-arrow-right"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                    <a class="footer-link" href="#">privacy policy</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row ">

                </p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</footer>