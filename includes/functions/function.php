<?php


   /**
     **Get All function v2.0
     **function to get all  records  from database
     **
     **$field  => to select the filed from table like[ * , username] 
     ** $table => to select the table from database
     ** $where => the condition to get the data from table
     **$orderingField => order by filed in table liek [order by ID , username]
     **$ordring => the type of ordring ['DESC' , 'ASC']
     */

    
     function getAllFrom($field ,$table , string $where = NULL ,string $and = NULL, $orderingField , $ordering = "DESC"  ){

        global $db;
    
    $getall = $db->prepare("SELECT $field FROM $table $where $and ORDER BY $orderingField $ordering");

    $getall->execute();

    $rows = $getall->fetchAll();

    return $rows;

    }

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


  /** 
     *Get item or  row in database v1.0
     *function to get latest items from database [users , iteams , comments]
     *$select   = filed to selcet 
     *$from    = the table to choose form
     *$where   = where the row what u want
     * @return $rows

     */
    function get_fild($select , $from  , $where){
        global $db;

    $getstmt = $db->prepare("SELECT $select FROM $from WHERE $where");

    $getstmt->execute();

    $rows = $getstmt->fetch();

    return $rows;

    }



/** 
      **Home redirect function v3.0
      **this function accept parametres
      **$errorMsg => echo the error message
      **$seconds  => seconds before redirecting
      **$url => uerl of page Directory 
      */
    function redirectHome($msg , $url = null,$link_name = null  , $seconds = 4 ){
    
    if($url === null){

        $url       = 'index.php';
        $link_name = 'الصفحة الرئيسية';

    }elseif($url == 'back'){
        if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== ''){
            $url       = $_SERVER['HTTP_REFERER'];
            $link_name = 'Previous page';
        }    
    }elseif(isset($url)){

        $url = $url;
        $link_name = $link_name;

    }else{
        $url        = 'index.php';
        $link_name  = 'Home page';
    } 
    echo $msg;
    echo "<div class='alert alert-info'>سوف يتم تحويلك الي  $link_name بعد $seconds ثواني.</div>";

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

     function checkItem($select , $from , $value , $and){

        global $db;

        $statment = $db->prepare("SELECT $select FROM $from WHERE $select = ? $and");

        $statment->execute(array($value));

        $count = $statment->rowCount();

        return $count;
     }

        /**
      **ciuntItems count of items function v1.0
      **function to count number of item rows accecpt tow parametres [$item , $tabel]
      ** @param string $item
      ** @param string $tabel
      **$item => the item to count
      **$table the table to choose from
      */
      function countColum($item , $tabel , $where , $and){

        global $db;

        $stmt2 = $db->prepare("SELECT COUNT($item) FROM $tabel WHERE $where $and");

        $stmt2->execute();

        return $stmt2->fetchColumn();
    }

         /**
     **filter sanitize string  function v1.0
     **function to sanitize string inputs
     ** $string => the input to filter 
     */
    function filter_str(string $string): string
    {
        $str = preg_replace('/\x00|<[^>]*>?/', '', $string);
        return str_replace(["'", '"'], ['&#39;', '&#34;'], $str);
    }
    
