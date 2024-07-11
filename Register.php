<?php
ob_start();
include 'inti.php';

// Check if submit button is clicked
if (isset($_POST['submit'])) {

  // Sanitize user input (using prepared statements later)
  $username = trim($_POST['user']);
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
  $password = trim($_POST['pass']);
  $cpassword = trim($_POST['cpass']);
  $phone = trim($_POST['phone']);
  $address = trim($_POST['adress']);

  // Check if username or email already exists using prepared statement
  try {
    $sql = "SELECT COUNT(*) FROM users WHERE Username = :username OR Email = :email";
    $stmt = $db->prepare($sql); // Replace $conn with the database connection variable from inti.php
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->fetchColumn();
  } catch(PDOException $e) {
    echo '<div class="alert alert-danger">Error: ' . $e->getMessage() . '</div>';
    exit; // Terminate script execution on PDO error
  }

  if ($count === 0) { // Both username and email are unique

    if ($password === $cpassword) {

      // Hash password securely
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

      // Insert user data into database
      try {
        $sql = "INSERT INTO users (Username, Email, Address, Phone, Password) VALUES (:username, :email, :address, :phone, :hashedPassword)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':hashedPassword', $hashedPassword, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
          header("location:login.php"); // Redirect to login page
        } else {
          echo "Insertion failed, please try again.";
        }
      } catch(PDOException $e) {
        echo '<div class="alert alert-danger">Error: ' . $e->getMessage() . '</div>';
        exit; // Terminate script execution on PDO error
      }
    } else {
      echo "<script>alert('Passwords do not match!'); window.location.href='Register.php';</script>";
    }

  } else { // Username or email already exists

    $existingField = $count === 1 ? ($stmt->fetchColumn() === 1 ? 'username' : 'email') : 'both';
    $message = "The $existingField already exists.";
    echo "<script>alert('$message'); window.location.href='Register.php';</script>";
  }
}

?>


?>
<section class="woocommerce single page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-xl-7">
                
                <div class="signup-form">
                    <div class="form-header">
                        <h2 class="font-weight-bold mb-3">سجل الان </h2>
                        <p class="woocommerce-register">
                            تسجيلالدخول <a href="login.php" class="text-decoration-underline">هل لديك حساب </a>
                        </p>
                    </div>

                    <form method="post" class="woocommerce-form woocommerce-form-register register">

                        <div class="row">
                           
                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>اسم المستخدم&nbsp;<span class="required">*</span></label>
                                    <input type="text" class="form-control" name="user"  value="" placeholder="اسم المستخدم ">
                                </p>
                            </div>

                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>بريد الكتروني&nbsp;<span class="required">*</span></label>
                                    <input type="email" class="form-control" name="email" value="" placeholder="بريدك الالكتلروني ">
                                </p>
                            </div>

                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>كلمة المرور &nbsp;<span class="required">*</span></label>
                                    <input type="password" class="form-control" name="pass" value="" placeholder="كلمة المرور ">
                                </p>
                            </div>
                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>اعادة ادخال كلمة المرور &nbsp;<span class="required">*</span></label>
                                    <input type="password" class="form-control" name="cpass" value="" placeholder="اعادة ادخال كلمة المرور ">
                                </p>
                            </div>
                     
                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>رقم التليفون &nbsp;<span class="required">*</span></label>
                                    <input type="text" class="form-control" name="phone"  value="" placeholder="رقم التليفون  ">
                                </p>
                            </div>

                            <div class="col-xl-6">
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label>العنوان &nbsp;<span class="required">*</span></label>
                                    <input type="text" class="form-control" name="adress"  value="" placeholder="العنوان  ">
                                </p>
                            </div>
                   

                            <div class="col-xl-12">
                                <div class="d-flex align-items-center justify-content-between py-2">
                                    <p class="form-row">
                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__policy">
                                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="policy" type="checkbox" id="policy" value="forever"> <span>قبول الشروط وسياسة الخصوصية</span>
                                        </label>
                                    </p>
            
                                    <p class="woocommerce-LostPassword lost_password">
                                        <a href="#">نسيت كلمة المرور؟</a>
                                    </p>
                               </div>
                            </div>
                        </div>
                      
                        <p class="woocommerce-FormRow form-row">
                            <button type="submit" class="woocommerce-button button" name="submit" value="Register">تسجيل </button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--shop register end-->
<?php 
include $tpl_tem .'footer.php'; 

ob_end_flush();
?>
