<!--================ header from php ===================--> 
<?php 
session_id('creativart');
session_start();
$page_title ="Loge In";
if(isset($_SESSION['user'])){
    header('Location: courses.php');// redirect to dashboard
}

    include '../../inti.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    
    $username = $_POST['user'];
    $passwor = $_POST['password'];
    $hashedpass = sha1($passwor);
    // check if user Exist in database
    $stm = $con->prepare(" SELECT 
                                userID ,username , password 
                                FROM 
                                users 
                            WHERE 
                                username= ? 
                            AND 
                                password= ? 
                            -- AND userID= 1
                            LIMIT 1 ");
    $stm->execute(array($username , $hashedpass));
    $rows =  $stm->fetch();
    $count = $stm->rowCount();

    // if count > 0 this is mean the user found in database 
    if($count > 0){
        $_SESSION['user'] = $username; // register session username
        $_SESSION['id'] = $rows['userID']; // register session userID 
        header('Location: courses.php');// redirect to dashboard
        exit();
    }
}

?>

<!--  body -->
<body id="top-header">
<!--====== Header End ======-->


<section class="page-wrapper woocommerce single">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-xl-5">
                <div class="woocommerce-notices-wrapper"></div>
                <div class="login-form">
                    <div class="form-header">
                        <h2 class="font-weight-bold mb-3">Login</h2>
    
                        <p class="woocommerce-register">
                            Don't have an account yet? <a href="Register.html" class="text-decoration-underline">Sign Up for Free</a>
                        </p>
                    </div>
                    <form class="woocommerce-form woocommerce-form-login login" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="username">Username or email address&nbsp;<span class="required">*</span></label>
                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="user" id="username" autocomplete="username" value="" placeholder="Username or Email">
                        </p>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="password">Password&nbsp;<span class="required">*</span></label>
                            <input class="woocommerce-Input woocommerce-Input--text input-text form-control" type="password" name="password" id="password" autocomplete="current-password" placeholder="Password">
                        </p>
                       
                       <div class="d-flex align-items-center justify-content-between py-2">
                            <p class="form-row">
                                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
                                </label>
                            </p>
    
                            <p class="woocommerce-LostPassword lost_password">
                                <a href="#">Forgot password?</a>
                            </p>
                       </div>
    
                       <p class="form-row">
                            <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="a414dce984"><input type="hidden" name="_wp_http_referer" value="/my-account/">
                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Login">Log in</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--shop category end-->



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
  
<!-- Mirrored from themeturn.com/tf-db/edumel-demo/edumel/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 19:38:11 GMT -->
</html>

   
   