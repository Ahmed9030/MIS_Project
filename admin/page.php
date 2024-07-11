<?php


// Categories => [ mange | Edite | insert | delete | add | apdate | stats ]

// condition ? true ; false

$do = isset($_GET['action']) ? $_GET['action'] : 'manage';
// $do = '';
// if (isset($_GET['action'])){
//     $do = $_GET['action'];
// }else{
//     $do = 'mange';
// }

// if the page is mine page 
if ($do == 'manage'){
    echo "Welcom to manage page ";
    echo "<a href=?action=add>Add new Categorie+ </a>";
}elseif ($do == 'add'){
    echo "Welcom to add page";
}elseif($do == 'insert'){
    echo "Welcom to insert page";
}else{
    echo "Error there's no page";
}