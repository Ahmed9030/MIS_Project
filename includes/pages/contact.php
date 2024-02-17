<!--================ header from php ===================--> 
<?php 
    include '../../inti.php';
?>

<!--  body -->
<body id="top-header">
<!--====== Header End ======-->
<section class="page-header">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-8">
          <div class="title-block">
            <div class="text-center fw-bold fs-1 mt-5 text-white mb-5">
                ماذا تريد <span class="learn">ان تتعلم ؟</span>
              </div>
            <ul class="header-bradcrumb justify-content-center">
              <li><a href="index.html">Home</a></li>
              <li class="active" aria-current="page">Contact</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>



<!-- Contact section start -->
<section class="contact section-padding">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-4 col-lg-5">
               <div class="contact-info-wrapper mb-5 mb-lg-0">
                   <h3>ما هي قصتك؟
                       <span>تواصل معنا</span>
                   </h3>
                   <p>هي منصة عربية توفر كورسات مجانية عالية الجودة </p>
                    <div class="contact-item">
                        <i class="fa fa-envelope"></i>
                        <h5>samergege7@gmail.com</h5>
                    </div>

                    <div class="contact-item">
                        <i class="fa fa-phone-alt"></i>
                        <h5>+20 1288736922</h5>
                    </div>

                    <div class="contact-item">
                        <i class="fa fa-map-marker"></i>
                        <h5>Moon Street Light Avenue, 14/05
                            Jupiter </h5>
                    </div>
               </div>
            </div>

            <div class="col-xl-7 col-lg-6">
                <form class="contact__form form-row " method="post" action="http://themeturn.com/tf-db/edumel-demo/edumel/mail.php" id="contactForm">
                    <div class="row">
                       <div class="col-12">
                           <div class="alert alert-success contact__msg" style="display: none" role="alert">
                               لقد تم ارسال رسالتك بنجاح.
                           </div>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-lg-6">
                           <div class="form-group">
                               <input type="text" id="name" name="name" class="form-control" placeholder="اسمك">
                           </div>
                       </div>
                       
                       <div class="col-lg-6">
                           <div class="form-group">
                               <input type="text" name="email" id="email" class="form-control" placeholder="عنوان البريد الالكتروني ">
                           </div>
                       </div>
                       <div class="col-lg-12">
                           <div class="form-group">
                               <input type="text" name="subject" id="subject" class="form-control" placeholder="الموضوع">
                           </div>
                       </div>
                       
                       <div class="col-lg-12">
                           <div class="form-group">
                               <textarea id="message" name="message" cols="30" rows="6" class="form-control" placeholder="رسالتك"></textarea>    
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-12">
                       <div class="text-center">
                           <button class="btn btn-main w-100 rounded" type="submit">ارسال رسالة</button>
                       </div>
                   </div>
               </form> 
            </div>
        </div>
    </div>
</section>
<!-- Contact section End -->

<!-- Map section start -->
<section class="map">
    <div id="map"></div>
 </section>
 <!-- Map section End -->


    <!-- Footer section start -->
<!--================== footer from php ===================-->
<?php include  '../templats/footer.php'?>
    <!-- Footer section End -->
    




    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="assets/vendors/jquery/jquery.js"></script>
    <!-- Bootstrap 5:0 -->
    <script src="assets/vendors/bootstrap/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.js"></script>
    <!-- Counterup -->
    <script src="assets/vendors/counterup/waypoint.js"></script>
    <script src="assets/vendors/counterup/jquery.counterup.min.js"></script>
    <!--  Owl Carousel -->
    <script src="assets/vendors/owl/owl.carousel.min.js"></script>
    <!-- Isotope -->
    <script src="assets/vendors/isotope/jquery.isotope.js"></script>
    <script src="assets/vendors/isotope/imagelaoded.min.js"></script>
    <!-- Animated Headline -->
    <script src="assets/vendors/animated-headline/animated-headline.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/script.js"></script>


  </body>
  
<!-- Mirrored from themeturn.com/tf-db/edumel-demo/edumel/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 19:38:36 GMT -->
</html>