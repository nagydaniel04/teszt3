<?php
session_start();
include '../model/name.php';
$id=$_SESSION["newsession"];
$image=currentimage($id);
$name=name($id);
$namelist=namelist($id);
if($name){
//controller
    include '../view/userlist.php';
}
 else {
    echo 'valami baj van';
}
