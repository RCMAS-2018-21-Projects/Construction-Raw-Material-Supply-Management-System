<?php
include('header.php');
?>
<!--================product header Menu Area =================-->

<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="index.php" class="slash">Home </a><span class="mx-2 mb-0">/</span> <strong class="text-black">Products</strong></div>
      </div>
    </div>
  </div>
  
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div id="slider-range" class="border-primary"></div>
          <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
        </div>
      </div>
    </div>
  </div>
  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
      <?php
        include('admin/database.inc.php');
                             $query="select * from tbl_item where cat_id='{$_GET['cat_id']}'";
                             $query_run=mysqli_query($con,$query);
                             while($row=mysqli_fetch_array($query_run)){
                           ?>
        <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
        <a href="singleproduct.php?id=<?php echo $row['item_id']?>">
        <?php echo '<img src="admin/upload/'.$row['item_img'].'" alt="image" width="200px" height="200px">'?></a>
          <h3 class="text-dark"><a href="#"><?php echo $row['item_name']?></a></h3>
          <p class="price"> ₹<?php echo $row['rate']?></p>
        </div>
                             <?php } ?>
        
  
        
      </div>
    </div>
  </div>
  <!--================Hero Banner Area Start =================-->
 
<!--================ End Testimonial Area =================-->

<!--================ start footer Area =================-->
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
                            <li><i class="ti-angle-right"></i>
                                <a href="#">products</a>
                            </li>
                            <li><i class="ti-angle-right"></i>
                                <a href="#">careers</a>
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
    <div class="col-lg-4  col-md-6">
    </div>
    <div class="col-lg-4  col-md-12">
        <div class="single-footer-widget newsletter">
            <h6>Email Newsletter</h6>
            <div id="mc_embed_signup">
                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                method="get" class="form-inline">

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
        <p>Sign up for new Recover Construction Company
        content, updates, surveys & offers.</p>
        <a class="footer-link" href="#">privacy policy</a>
    </div>
</div>
</div>


</div>

<div class="footer-bottom">
    <div class="container">
        <div class="row ">
            <!--p class="col-lg-12 footer-text "><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.-->
            </p>
        </div>    
    </div>  
</div>

</footer>
<!--================ End footer Area =================-->






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope.pkgd.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/theme.js"></script>
</body>
</html>