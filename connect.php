<?php

        /*
            ===========================================================
            == connect page 
            == connect with database 'CreaTiveArt' useing PDO to connect
            ============================================================
            */
            
$dsn = 'mysql:host=localhost;dbname=CreaTiveArt';// data source name
$user = 'root';
$pass = '';
$option = array(
    PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
    $con = new PDO($dsn , $user , $pass , $option);
    $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
//    echo "You are connected welcom to your database";
}
catch(PDOException $e){
    echo "failed to connect" . $e->getMessage();
}
