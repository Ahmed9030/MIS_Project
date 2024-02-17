<?php

    include 'connect.php';
    
    $tpl         =  'includes/templats/'; // Template Directory
    $func        =  '../functions/'; // function Directory
    $tpl_pages   =  '../templats/'; // Template Directrory For Pages
    $tpl_js      =  "assets/vendors/"; //javascrpit  Directory for index.php 
    $tpl_js_page =  "../../assets/vendors/"; //javascrpit  Directory for index.php 
    $nav         =  "includes/pages/"; // navbar  Directory
    $nav_pages   =  "../templats"; // navbar  Directory
    $url_image   =  "assets/images/"; //images  Directory

    // includes the importn files
    include $func . "function.php";
    include $tpl_pages .'header_pages.php';//Header of pages folder
    if (!isset($navabar_pages)){include "../templats/navbar_pages.php";} // Navabar of pages folder



