<?php
include '../model/save.php';
include '../view/registration.php';
if($_POST){
    $ok=add($_POST);
    if($ok){
        echo 'Succes';
        //controller
        $url='../controller/login.php';
        header('Location: '.$url);
    }
    else{
        include '../view/registration';
    }
}

