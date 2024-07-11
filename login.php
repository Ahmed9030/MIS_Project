
<?php
ob_start();
include 'inti.php';


// Check if submit button is clicked
if (isset($_POST['submit'])) {

    // Sanitize user input using PDO prepared statements
    $username = $_POST['user'];
    $password = $_POST['pass'];

    // Check if user exists
    $stmt = $db->prepare('SELECT * FROM users WHERE Username = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user) { // User exists

        if (password_verify($password, $user['Password'])) { // Password matches

            // Start a session and redirect to home page
            session_start();
            $_SESSION['user'] = $username;
            $_SESSION['user_id'] = $user['ID'];
            header("location:dashbord.php");

        } else {
            echo "<script>alert('Incorrect password!'); window.location.href='login.php';</script>";
        }

    } else { // User does not exist

        echo "<script>alert('User does not exist!'); window.location.href='login.php';</script>";

    }

}

?>
<!-- start body section -->
<section class="page-wrapper woocommerce single">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-xl-5">
                <div class="woocommerce-notices-wrapper"></div>
                <div class="login-form">
                    <div class="form-header">
                        <h2 class="font-weight-bold mb-3">تسجيل الدخول </h2>
    
                        <p class="woocommerce-register">
                            الاشتراك مجانا؟  <a href="Register.php" class="text-decoration-underline">لا تملك حسابا حتي الان؟ </a>
                        </p>
                    </div>
                    <form name="form" class="woocommerce-form woocommerce-form-login login" method="post" action="login.php">
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="username">اسم المستخدم او عنوان البريد الالكتروني &nbsp;<span class="required">*</span></label>
                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="user" id="username" autocomplete="username" value="" placeholder="اسم المستخدم او البريد الالكتروني؟ ">
                        </p>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="password">كلمة المرور &nbsp;<span class="required">*</span></label>
                            <input class="woocommerce-Input woocommerce-Input--text input-text form-control" type="password" name="pass" id="password" autocomplete="current-password" placeholder="كلمة المرور ">
                        </p>
                       
                       <div class="d-flex align-items-center justify-content-between py-2">
                            <p class="form-row">
                                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>تذكرني </span>
                                </label>
                            </p>
    
                            <p class="woocommerce-LostPassword lost_password">
                                <a href="#">هل نسيت كلمة المرور؟ </a>
                            </p>
                       </div>
    
                       <p class="form-row">
                            <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="a414dce984"><input type="hidden" name="_wp_http_referer" value="/my-account/">
                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="submit" value="Log in">تسجيل الدخول </button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--shop category end-->
<?php 
include $tpl_tem .'footer.php'; 

ob_end_flush();
?>
