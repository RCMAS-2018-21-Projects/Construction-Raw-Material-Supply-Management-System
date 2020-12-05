<?php include('header.php');?>
<!--================Header Menu Area =================-->

 
  <!--================Hero Banner Area Start =================-->
  <section class="hero-banner hero-banner-sm">
    <div class="container text-center">
      <h2>Contact Us</h2>
      <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
      </nav>
    </div>
  </section>
  <!--================Hero Banner Area End =================-->


  <!-- ================ contact section start ================= -->
  <section class="contact-section area-padding">
    <div class="container">
      <div class="d-none d-sm-block pb-4">
      </div>

      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm">Send Message</button>
            </div>
          </form>


        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Ernakulam,aluva</h3>
              <p>near federal bank</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654">0484-2600156</a></h3>
              <!--<p>Mon to Fri 9am to 6pm</p>-->
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">support@roshanjoseapr6@gmail.com</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

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
                            <!--<li><i class="ti-angle-right"></i>
                                <a href="#">careers</a>
                            </li>-->
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
                       <!---- <li><i class="ti-angle-right"></i>
                            <a href="#">shop</a>
                        </li>-->
                        <li><i class="ti-angle-right"></i>
                            <a href="#">contact us</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-4  col-md-6">
        <div class="single-footer-widget mail-chimp">
        </div>
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
            <p class="col-lg-12 footer-text "><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>    
    </div>  
</div>

</footer>
<!--================ End footer Area =================-->


<!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <h2>Thank you</h2>
                    <p>Your message is successfully sent...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <h2>Sorry !</h2>
                    <p> Something went wrong </p>
                </div>
            </div>
        </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->






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