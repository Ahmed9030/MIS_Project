<?php

   // error reporting
   ini_set("display_errors" , "On");
   error_reporting(E_ALL);

    include '../connect.php';
    // Routes
    $tpl         = 'includes/templats/'; //Template Directroy
    $lang        = 'includes/langs/'; //lang Directroy
    $func        = 'includes/functions/'; //Template js Directroy
    $css         = 'layout/css/'; //Template css Directroy
    $css_vendors = 'layout/vendors/'; //Template css Directroy
    $js = 'layout/js/'; //Template js Directroy
    

    include $func . "function.php";
    include   $tpl .  "header.php";
    // include navbar on all pages expect the on with $noNavbar vairable
    if(!isset($noNavbar)){include $tpl . 'navbar.php'; }

    