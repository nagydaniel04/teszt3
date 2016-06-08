<?php
if(isset($_GET["re"])==1){
    echo '<h3>Failed</h3>';
}
include '../model/save.php';
include '../view/registration.php';
include '../model/validation.php';

if($_POST){
    $okname=regname($_POST["name"]);
    $okmail=regmail($_POST["email"]);
    $okpass=regpass($_POST["passw"],$_POST["repassw"]);
    if($okname&&$okmail&&$okpass){
        $ok=add($_POST);
        if($ok){
            echo 'Succes';
            //controller
            $url='../controller/login.php';
            header('Location: '.$url);
        }
    }
    else{
         header("Refresh:1 ; save.php?re=1");
    }
}

