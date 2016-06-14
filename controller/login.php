<?php
if(isset($_GET["log"])==1){
    session_unset();
}
if(isset($_GET["re"])==1){    
    echo '<h3> Incorrect Email or Password <h3>';
}
include '../model/isuser.php';
include '../view/login.php';
if($_POST){
    global $conn;
    //controller
    $id=isuser($_POST["email"], $_POST["passw"]);
    if($id){
        session_start();
        $_SESSION["newsession"]=$id;
        $newURL='../controller/userlist.php';
        header('Location: '.$newURL);
    }
    else{
        $re=1;
        header("Refresh:1; url=login.php?re=1;");
    }
}
