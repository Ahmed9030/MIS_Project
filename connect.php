<?php
        /*
            ===========================================================
            == connect page 
            == connect with database 'CreaTiveArt' useing PDO to connect
            ============================================================
            */
            
$dsn = 'mysql:host=localhost;dbname=MIS_project';// data source name
$user = 'root';
$pass = '';
$option = array(
    PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
    $db = new PDO($dsn , $user , $pass , $option);
    $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
//    echo "You are connected welcom to your database";
}
catch(PDOException $e){
    echo "failed to connect" . $e->getMessage();
}
           
// // globel databases infromation
// $dsn = 'mysql:host=sql208.infinityfree.com;dbname=if0_36157871_db_mis_project';// data source name
// $user = 'if0_36157871';
// $pass = '4f4MzQlIAPKId';
// $option = array(
//     PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
// );

// try {
//     $db = new PDO($dsn , $user , $pass , $option);
//     $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
// //    echo "You are connected welcom to your database";
// }
// catch(PDOException $e){
//     echo "failed to connect" . $e->getMessage();
// }
