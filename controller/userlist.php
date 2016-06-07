<?php
session_start();
include '../model/name.php';
$email=$_SESSION["newsession"];
$name=name($email);
$namelist=namelist($email);
if($name){
//controller
    include '../view/userlist.php';
}
 else {
    echo 'valami baj van';
}
