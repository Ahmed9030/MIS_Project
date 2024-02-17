<?php
session_id('creativart');
session_start();
$page_title ="Dashboard";
if(isset($_SESSION['user'])){
    
    echo 'Welcome: ' . $_SESSION['user'];
    include 'inti.php';
    print_r($_SESSION);
    include $tpl. "foooter.php";

}else{
    // header('Location: index.php');
    // exit();
    echo "no session";
}