<?php

   // error reporting
   ini_set("display_errors" , "On");
   error_reporting(E_ALL);
   session_start();

   $session_u = '';
    if (isset($_SESSION['user'])){
      $session_id = $_SESSION['user_id'];
      $session_u  = $_SESSION['user'];
    }
   
   include 'connect.php';
   
   $tpl         =  'includes/templats/'; // Template Directory
   $func        =  'includes/functions/'; // function Directory
   $tpl_js      =  "assets/vendors/"; //javascrpit  Directory for index.php 
   $tpl_js_page =  "../../assets/vendors/"; //javascrpit  Directory for index.php 
   $tpl_tem     =  "includes/templats/"; // templats  Directory
   $url_image   =  "assets/images/"; //images  Directory

   // includes the importn files
   include $func . "function.php";
   include $tpl_tem .'header.php';//Header of pages folder
   include $tpl_tem ."navbar.php";// Navabar of pages folder
   require_once 'includes/libralys/mail.php';



