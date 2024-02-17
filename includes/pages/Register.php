<?php 

session_id('creativart');    
session_start();
$page_title = 'Sign Up';
if(isset($_SESSION['user'])){
    
    header('Location: courses.php');// redirect to dashboard

}


include '../../inti.php';
$do = isset($_GET['action']) ? $_GET['action'] : 'sign_up';


if ($do == 'sign_up'){
?>
    <!--  body -->
    <body id="top-header">
    <!--====== Header End ======-->
    <section class="woocommerce single page-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-7">
                    
                    <div class="signup-form">
                        <div class="form-header">
                            <h2 class="font-weight-bold mb-3">Sign Up</h2>
                            <p class="woocommerce-register">
                                تسجيل الدخول <a href="login.html" class="text-decoration-underline">هل لديك حساب </a>
                            </p>
                        </div>
                        <form action="?action=insert" method="POST" id="my-form" class=" woocommerce-form woocommerce-form-register register ">

                            <div class="row">
                                <div class="col-xl-6">
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label>الاسم ثلاثي&nbsp;<span class="required">*</span></label>
                                        <input type="text" class="form-control" name="full_name" required = "required" placeholder="Full Name">
                                    </p>
                                </div>
                                <div class="col-xl-6">
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label>اسم المستخدم&nbsp;<span class="required">*</span></label>
                                        <input type="text" class="form-control" name="username" required = "required" placeholder="Username">
                                    </p>
                                </div>

                                <div class="col-xl-6">
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label>Email&nbsp;<span class="required">*</span></label>
                                        <input type="email" class="form-control" name="email" required = "required"  placeholder="Your Email">
                                    </p>
                                </div>

                                <div class="col-xl-6">
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label>Password&nbsp;<span class="required">*</span></label>
                                        <input type="password" class="form-control" name="password" required = "required" placeholder="Password">
                                    </p>
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
        <script src="<?php echo $tpl_js_page?>jquery/jquery.js"></script>
        <!-- Bootstrap 5:0 -->
        <script src="<?php echo $tpl_js_page?>bootstrap/popper.min.js"></script>
        <script src="<?php echo $tpl_js_page?>bootstrap/bootstrap.js"></script>
        <!-- Counterup -->
        <script src="<?php echo $tpl_js_page?>counterup/waypoint.js"></script>
        <script src="<?php echo $tpl_js_page?>counterup/jquery.counterup.min.js"></script>
        <!--  Owl Carousel -->
        <script src="<?php echo $tpl_js_page?>owl/owl.carousel.min.js"></script>
        <!-- Isotope -->
        <script src="<?php echo $tpl_js_page?>isotope/jquery.isotope.js"></script>
        <script src="a<?php echo $tpl_js?>isotope/imagelaoded.min.js"></script>
        <!-- Animated Headline -->
        <script src="<?php echo $tpl_js_page?>animated-headline/animated-headline.js"></script>
        <!-- Magnific Popup -->
        <script src="<?php echo $tpl_js_page?>magnific-popup/jquery.magnific-popup.min.js"></script>
        
        <script src="../../assets/js/script.js"></script>
        <script src="../../assets/js/backend.js"></script>
        
        
    </body>
    
    <!-- Mirrored from themeturn.com/tf-db/edumel-demo/edumel/Register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 19:38:11 GMT -->
    </html>

    <?php
    }elseif ($do == 'insert'){
        if($_SERVER['REQUEST_METHOD'] == "POST" ){
            // get variables from the from
            
            echo "<div class='container'>";
        
            $user = $_POST['username'];
            $name = $_POST['full_name'];
            $mail = $_POST['email'];
            $pass = $_POST['password'];

            $hashpass = sha1($pass);
            
            $forError = array();

            if (strlen($user) < 4){
                $forError[] = "Username Can't Be Less <srtrong>Then 4 Characters</strong>";
            }
            if (strlen($user) > 20){
                $forError[] = "Username Can't Be larg <srtrong>Then 4 Characters</strong>";
            }
            if (empty($user)){
                $formError[] =  "Username Can't Be <srtrong>Empty</srtrong> Pls Try Again";
            }
            if (empty($pass)){
                $formError[] =  "password Can't Be <srtrong>Empty</srtrong> Pls Try Again";
            }
            if (empty($mail)){
                $formError[] =  "Email Can't Be <srtrong>Empty</srtrong> Pls Try Again";
            }
            if (empty($name)){
                $formError[] =  "Full Nmae Can't Be <srtrong>Empty</srtrong> Pls Try Again ";
            }
            foreach($formError as $error){
                echo  "<div class='alert alert-danger'>". $error . "</div>";
            }

            if (empty($formError)){

                $check_username = checkItem("username" ,"users" , $user );
                $check_email = checkItem("email" ,"users" , $mail );

                if($check_username == 1){
                    echo "<div class='alert alert-danger'>Sorry This User Is Exist</div>";
                    if($check_email == 1){
                        echo "<div class='alert alert-danger'>Sorry This Email Is Exist</div>";
                    }
                }else{
                // Insert the database  with info
                $stm = $con->prepare("INSERT INTO 
                                        users(username , password , email , full_name)
                                        VALUES (:zuser , :zpass , :zmail , :zname)");
                $stm->execute(array(
                    'zuser' => $user,
                    'zpass' => $hashpass,
                    'zmail' => $mail,
                    'zname' => $name,
                ));
                // echo success message
                echo '<div class="alert alert-success">' . $stm->rowCount() . " Record Insert". "</div>" ;
            }
                
            }
        }else{
            
            // echo error message
            echo " <h1 class='text-center'>Error Message</h1>" ;       
            echo "<div class='container'>";
            
                $errorMsg = "You can't browse this page directly";

                redirectHome($errorMsg ,1);
            
                echo "</div>";
            }
            
        }

?>



