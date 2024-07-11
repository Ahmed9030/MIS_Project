<?php
/*
    ==========================================
    == Templat Page
    ==========================================
*/
ob_start();
session_id('ecommerce');
session_start();
$page_title = '';
if(isset($_SESSION['username'])){

    include 'inti.php';

    $do = isset($_GET['action']) ? $_GET['action'] : 'manage';

    // start manage pages
    
    if ($do == 'manage'){
        // mange page
    }elseif($do == "add"){
        //  add page

    }elseif($do == 'insert'){
        // Insert page

    }elseif($do == 'Edit'){   
        
    }elseif($do == "updata"){   
        // updata page

    }elseif($do == 'delete'){
        // delete page
        
    }elseif($do == "activate"){
        // activate page
        
    }
    // end manage pages

    include $tpl. "foooter.php";

    }else{
        header('Location: index.php');
        exit();
    }
ob_end_flush();





