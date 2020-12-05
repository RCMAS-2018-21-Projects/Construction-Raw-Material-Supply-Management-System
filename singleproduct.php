<?php
ob_start();
include('header.php');
?>
<!--================single product header Menu Area =================-->
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a
          href="product.php">Product</a> <span class="mx-2 mb-0"></span> 
        </div>
    </div>
  </div>
</div>
<?php 

        $m=''; 
       if(isset($_POST['button'])&&isset($_POST['quantity'])&&isset($_POST['item_id']))
          { 
              $item_id=$_POST['item_id'];    
              $item_quantity=$_POST['quantity'];
         /*     $_SESSION['cart'][$iid]['c_qty']=$c_qty;
               header("location:cart.php");*/
           if(isset($_SESSION['user_id']))
           {
               //  $rus=$_SESSION['user_id'];
                $s="select * from tbl_cart where item_id='$item_id' AND cust_id='$c_id'";
                $res=mysqli_query($con,$s);
                if(mysqli_num_rows($res)>0){
                 
                     $m='Item already exist in Cart';
                    
                      }
                 else
                 {
             
                     $ql="insert into tbl_cart(item_id,cust_id,quantity) Values('$item_id','$c_id','$item_quantity')";
                     $result=mysqli_query($con,$ql);  
                    if($result)
                    {
                       /*header("location:cart.php");*/
                       $m='Added to Cart';
                    } 
                    else
                    {
                       echo "error".mysqli_error($con);
                    }  
                 } 
            }    
         
          else
          {
           
            header("location:signin.php");
          
          }
        }
       ?>  
        <?php
        include('admin/database.inc.php');
        include('admin/function.inc.php');
          $item_id=get_safe_value($_GET['id']);
                             $query="select * from tbl_item where item_id='$item_id'";
                             $query_run=mysqli_query($con,$query);
                             while($row=mysqli_fetch_array($query_run)){
                           ?>
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mr-auto">
        <div class="text-center">
          <!-- <img src="img/6.png" alt="Image" class="img-fluid p-5"> -->
          <?php echo '<img src="admin/upload/'.$row['item_img'].'" alt="image" width="300px" height="300px">'?>
        </div>
      </div>

      <div class="col-md-6">
     
        <h2 class="text-black"><?php echo $row['item_name']?></h2>
        <p></p>
         

        <p><strong class="text h4" style="color:#000">₹<?php echo $row['rate']?></strong></p>
                             
                             
        <div class="mb-5">
          <div class="input-group mb-3" style="max-width: 220px;">
            
            <form method ="POST">
            <?php 
            if($row['cat_id']==13){
            ?>
                FT<input type="text"  name="quantity" class="form-control text-center" readonly value="20"
                  aria-label="Example text with button addon" aria-describedby="button-addon1">
                 
                  <?php } ?>
              <?php if($row['cat_id']==12){
              ?>
              NOS<input type="text"  name="quantity" class="form-control text-center" readonly value="50"
                  aria-label="Example text with button addon" aria-describedby="button-addon1">
                  <?php } ?>
                  <?php if($row['cat_id']==2){
              ?>
              FT<input type="text"  name="quantity" class="form-control text-center" readonly value="20"
                  aria-label="Example text with button addon" aria-describedby="button-addon1">
                  <?php } ?>   

                  <input type="text" name="item_id" value="<?php echo $row['item_id'];  ?>" hidden>
            
          </div>

        </div>
        <style>
        .new{
          background-color:#FB2F2F;
          border:.5px solid #FB2F2F;
          border-radius:5px;
          padding:10px 15px;
          color:#fff;
                  }
        .new:hover{
          /* background-color:#fff;
          color:#000; */
          transition:0.8s ease;
          box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
        </style>
        <p><button type="submit" name="button" class="new">Add To Cart</button></p>
        <p style="color:red"><?php echo $m; ?></p>
         </form>        
        <div class="mt-5">
        
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <table class="table custom-table">
                <thead>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
  <?php } ?>
</div>
<!-- ============second part============= -->
<!-- <div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mr-auto">
        <div class="border text-center">
          <img src="img/6.png" alt="Image" class="img-fluid p-5">
        </div>
      </div>
      <div class="col-md-6">
        <h2 class="text-black">Ibuprofen Tablets, 200mg</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, vitae, explicabo? Incidunt facere, natus
          soluta dolores iusto! Molestiae expedita veritatis nesciunt doloremque sint asperiores fuga voluptas,
          distinctio, aperiam, ratione dolore.</p>
        

        <p><del>₹95.00</del>  <strong class="text-primary h4">₹55.00</strong></p>

        
        
        <div class="mb-5">
          <div class="input-group mb-3" style="max-width: 220px;">
            <div class="input-group-prepend">
              <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
            </div>
            <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
            <div class="input-group-append">
              <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
            </div>
          </div>

        </div>
        <p><a href="cart.php" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p>

        <div class="mt-5">
          <ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                aria-controls="pills-home" aria-selected="true">Ordering Information</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <table class="table custom-table">
                <thead>
                  <th>Material</th>
                  <th>Description</th>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">OTC022401</th>
                    <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                  </tr> 
                </tbody>
              </table>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</div> -->
<!-- =============end================ -->
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
            <!--p class="col-lg-12 footer-text "><Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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