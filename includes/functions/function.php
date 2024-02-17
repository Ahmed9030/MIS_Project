<?php

/*
    ** title funcion v1.0
    **that echo the page title in case the page 
    ** Has the variable $page_title and echo Default title for other pages
    */

    function getTitle(){
        global $page_title;
        if(isset($page_title)) { 
            echo $page_title;
        } else {
            echo 'Default';
        }
    }

    /*
    **Home redirect function v2.0
    **this function accept parametres
    **$errorMsg => echo the error message
    **$seconds  => seconds before redirecting
    **$url => uerl of page Directory
    */
    function redirectHome($errorMsg , $seconds = 4 , $url = "courses.php" ){
        
        echo "<div class='alert alert-danger'>$errorMsg.</div>";
        
        echo "<div class='alert alert-info'>You will redirect to Home page after $seconds.</div>";

        header("refresh:$seconds;url=$url");

        exit();

    }



/**
     **hecCk Items function v1.0 
     **function to check item in database [function accpet parametres]
     **$select => the item to select [Example: user : item : category]
     **$from => the table to select from [Example: user : item : category]
     **$value => the value ofr select [Example: Ahmed : box : electronics]
     */

     function checkItem($select , $from , $value){

        global $con;

        $statment = $con->prepare("SELECT $select FROM $from WHERE $select = ?");

        $statment->execute(array($value));

        $count = $statment->rowCount();

        return $count;
     }