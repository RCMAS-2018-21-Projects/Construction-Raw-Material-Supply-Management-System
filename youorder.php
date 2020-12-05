<?php 
 ob_start();
include('header.php'); 

$a=$_SESSION['user_id'];


$sel="select * from tbl_customer where email='$a'";
$result=mysqli_query($con,$sel);
while($selrow=mysqli_fetch_assoc($result)){
    $cu_id=$selrow['cust_id'];
  }
 
 ?>
 <html>
 <body style="overflow-x:hidden">
<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Your order</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">My orders</h2>
            <!-- <div class="p-3 p-lg-5 border">
              <div class="form-group">
              
              </div> -->
              <table class="table table-striped">
  <thead>
 
  <tr>
      <th scope="col">sl.no</th>
      <th scope="col">#</th>
      <th scope="col">ordered date</th>
      <th scope="col">Item</th>
      <th scope="col">Total amount</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  $select="select * from tbl_ordermaster where cust_id='$cu_id'";
  $re=mysqli_query($con,$select);
  if(mysqli_num_rows($re)){
    $i=1;
  while($row=mysqli_fetch_assoc($re)){
    $orderid=$row['orma_id'];
    $date=$row['or_date'];
    $amount=$row['total_amt'];
    
  ?> 
    <tr>
<!-- 
      <th scope="row"></th> -->
      <td><?php echo $i; ?></td>
      <td><?php echo $orderid; ?></td>
      <td><?php echo $date; ?></td>
      <td>
      <?php
                    $orderid=$row['orma_id'];
                    $query1="select tbl_orderchild.quantity,tbl_item.item_name from tbl_orderchild,tbl_item where tbl_orderchild.item_id=tbl_item.item_id and tbl_orderchild.orma_id='$orderid'";
                    $query_run1=mysqli_query($con,$query1);
                    while($row1=mysqli_fetch_array($query_run1)){
                      ?>
                      
                      <?php echo $row1['item_name'];echo '  X  '; echo $row1['quantity']; echo ' <br>  '; }?></td>
                      <?php $selpay="select * from tbl_payment where orma_id='$orderid'";
                      $que=mysqli_query($con,$selpay);
                      while($new1=mysqli_fetch_assoc($que)){
                        $totalamt=$new1['tot'];
                      $selstatus="select * from tbl_delivery where orma_id='$orderid'";
                      $del=mysqli_query($con,$selstatus);
                      while($status=mysqli_fetch_assoc($del)){
                        $delivstatus=$status['deliv_status'];
                      ?>
      <td><?php echo $totalamt; ?></td>
      <td><?php echo $delivstatus; ?></td>           
    </tr> 
  <?php 
$i++;
}}}}else{ ?>
  <tr><td colspan="5">No data found</td></tr>
  <?php } ?>
  </tbody>
</table>
              <?php
          

    //           $srt="select * from tbl_customer where email='$q'";
    //           $r=mysqli_query($con,$srt);
    //             if(!$r)
    //            {
    //             echo "error".mysqli_error($con);
    //             die();
    //            }
    //           $row=mysqli_fetch_assoc($r);
    //           $cus_id=$row['cust_id'];
            
          
    //         $S="select tbl_cart.*,tbl_item.* from tbl_cart,tbl_item where tbl_cart.item_id=tbl_item.item_id AND tbl_cart.cust_id='$cus_id'";
    //            $rez=mysqli_query($con,$S);
    //            if(!$rez)
    //            {
    //             echo "error".mysqli_error($con);
    //             die();
    //            }
    //            $c=0;$i=0;$tot=0;$s=0;
    //            if(mysqli_num_rows($rez)>0){
    //            while($e=mysqli_fetch_assoc($rez)){
                
    //             $cart_id=$e['cart_id'];
    //             $qty=$e['quantity']; 
    //             $i+=$qty;
    //             $price=$e['rate']; 
    //             $subtot=$qty*$price;
    //             $tot+=$subtot;
            
            //  ?>
        
        <!-- </?php }} ?> -->
          <!-- </?php -->
		<!-- // $s="select * from tbl_customer where email='$q'";
    //   $rez=mysqli_query($con,$s);
    //            if(!$rez)
    //            {
    //             echo "error".mysqli_error($con);
    //             die();
    //            }
	
		// $r=mysqli_fetch_assoc($rez); -->
		<!-- ?> -->
              <div class="form-group row">
                <div class="col-md-6">
                
                <form method="POST">
                  
                <div class="col-md-6">
                 
                  
                </div>
              </div>
    
              <div class="form-group row">
                <div class="col-md-12">
                  
                </div>
              </div>
    
              <div class="form-group row">
                <div class="col-md-12">
                  
              </div>
    
              <div class="form-group">
              </div>
    
              <div class="form-group row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                </div>
              </div>
    
              <div class="form-group row mb-5">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                </div>
              </div>
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
          <!-- <div class="col-md-6">
    
            <div class="row mb-5">
              <div class="col-md-12">
               
                
                
               
                    </div>
                  </div>
    
                </div>
              </div>
            </div> -->
    
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
                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                method="get" class="form-inline">

                <div class="form-group row no-gutters">
                    <div class="col-lg-8 col-md-8 col-7">
                        <input name="email" placeholder="Your cust_id Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your cust_id Address '"
                        required="" >
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

</footer>
</body>
</html>