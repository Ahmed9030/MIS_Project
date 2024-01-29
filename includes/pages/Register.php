<!--================ header from php ===================--> 
<?php 
    include '../CreaTiveArt/inti.php';
    include '../templats/header_pages.php'
?>

<!--  body -->
<body id="top-header">
<!--================= navbar from php ============-->
<?php 
include "../templats/navbar_pages.php"
;?>
<!--====== Header End ======-->


<section class="woocommerce single page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-xl-7">
                
                <div class="signup-form">
                    <div class="form-header">
                        <h2 class="font-weight-bold mb-3">Sign Up</h2>
                        <p class="woocommerce-register">
                            تسجيلالدخول <a href="login.html" class="text-decoration-underline">هل لديك حساب </a>
                        </p>
                    </div>

                    <form method="post" class="woocommerce-form woocommerce-form-register register">

                        <div class="row">
                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>الاسم الاول&nbsp;<span class="required">*</span></label>
                                    <input type="text" class="form-control" name="first-name" placeholder="First Name">
                                </p>
                            </div>
                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>الاسم الاخير&nbsp;<span class="required">*</span></label>
                                    <input type="text" class="form-control" name="last-name"  placeholder="Last Name">
                                </p>
                            </div>
                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>اسم المستخدم&nbsp;<span class="required">*</span></label>
                                    <input type="text" class="form-control" name="user-name"  value="" placeholder="Username">
                                </p>
                            </div>

                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>Email&nbsp;<span class="required">*</span></label>
                                    <input type="email" class="form-control" name="email" value="" placeholder="Your Email">
                                </p>
                            </div>

                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>Password&nbsp;<span class="required">*</span></label>
                                    <input type="password" class="form-control" name="password" value="" placeholder="Password">
                                </p>
                            </div>
                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>Re-Enter Password&nbsp;<span class="required">*</span></label>
                                    <input type="password" class="form-control" name="re-password" value="" placeholder="Re-Enter Password">
                                </p>
                            </div>

                            <div class="col-xl-12">
                                <div class="d-flex align-items-center justify-content-between py-2">
                                    <p class="form-row">
                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__policy">
                                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="policy" type="checkbox" id="policy" value="forever"> <span>Accept the Terms and Privacy Policy</span>
                                        </label>
                                    </p>
            
                                    <p class="woocommerce-LostPassword lost_password">
                                        <a href="#">Forgot password?</a>
                                    </p>
                               </div>
                            </div>
                        </div>
                      
                        <p class="woocommerce-FormRow form-row">
                            <button type="submit" class="woocommerce-button button" name="register" value="Register">Register</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--shop register end-->

   
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
  
<!-- Mirrored from themeturn.com/tf-db/edumel-demo/edumel/Register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 19:38:11 GMT -->
</html>

   
   