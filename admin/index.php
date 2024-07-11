<?php
ob_start();
session_start(); 
$noNavbar = ' '; // hide navbar in this page
$page_title ="Loge In";
if(isset($_SESSION['username'])){
    header('Location: dashboard.php');// redirect to dashboard

}
include   'inti.php'; 

// check if user coming from HTTP post request
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $username = $_POST['username'];
    $passwor = $_POST['pass'];
    $hashedpass = sha1($passwor);
    // check if user Exist in database
    $stmt = $db->prepare(" SELECT 
                                * 
                                FROM 
                                users 
                            WHERE 
                                username= ? 
                            AND 
                                password= ? 
                            AND group_id = 1
                            LIMIT 1 ");
    $stmt->execute(array($username , $hashedpass));
    $row =  $stmt->fetch();
    $count = $stmt->rowCount();

    // if count > 0 this is mean the user found in database 
    if($count >0){
        $_SESSION['username'] = $username; // register session username
        $_SESSION['ID'] = $row['ID']; // register session userID 
        header('Location: dashboard.php');// redirect to dashboard
        exit();
    }else{
        echo '<div class="container">';
            echo  "<div class='alert alert-danger'>فقط الادمن  من يستطيع تسجيل الدخول</div>";
        echo '</div>';                                                                                                                                                          
        
    }

}
?>

 <form class="login" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <h1 class="text-center">Admin Login</h1>
    <input class="form-control" type="text" name="username" placeholder="username" autocomplete="off">
    <input class="form-control" type="password" name="pass" placeholder="password" autocomplete="off">
    <input class="btn btn-primary btn-block" type="submit"  value="Login">
 </form>

<?php ob_end_flush(); ?>
