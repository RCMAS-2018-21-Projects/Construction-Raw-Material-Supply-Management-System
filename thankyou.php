
  <?php 
  include ('header.php');
    include ('admin/function.inc.php');

    $order_id=$_GET['a'];
    $cust_id=$_GET['c'];

  echo $cust_id;
  $delete_q="delete from tbl_cart where cust_id='$cust_id'";
  echo $delete_q;
  mysqli_query($con,$delete_q);
  if(!$delete_q){
    echo "asdadasd".mysqli_error($con);
    die();

}

$selpay="select * from tbl_payment where orma_id='$order_id'";
$n=mysqli_query($con,$selpay);
$new=mysqli_fetch_assoc($n);
$disc=$new['discount'];
$amount=$new['tot'];
  ?>
  

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong
              class="text-black">Thank You</strong></div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-primary"></span>
            <img src="img/tick.png" alt="image/pngt" width="100px" height="100px">
            <p class="lead mb-5">You order was successfuly completed.</p>
            <p>Order no:#<?php echo $order_id; ?></p>
            <p>Discount: <?php echo $disc; ?></p>
            <p>Payable amount: <?php echo $amount; ?>RS</p>
            <p><a href="product.php" class="btn btn-md height-auto px-4 py-3 btn-primary">Back to store</a></p>
          </div>
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
            <h6>Email Newsletter</h6>
            <div id="mc_embed_signup">
                <form target="_blank" method="get" class="form-inline">

                <div class="form-group row no-gutters">
                    <div class="col-lg-8 col-md-8 col-7">
                        <input name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                        required="" type="email">
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
<div class="footer-bottom">
    <div class="container">
        <div class="row ">
          
            </p>
        </div>    
    </div>  
</div> 

</footer>