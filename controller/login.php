<?php
include '../model/isuser.php';
include '../view/login.php';
if($_POST){
    global $conn;
    //controller
    $ok=isuser($_POST["email"], $_POST["passw"]);
    if($ok){
        session_start();
        var_dump($_POST["email"]);
        $_SESSION["newsession"]=$_POST["email"];
        var_dump($_SESSION);
        $newURL='../controller/userlist.php';
        header('Location: '.$newURL);
    }
    else{
        echo '<h3> Incorrect Email or Password <h3>';
        include '../view/login.php';
    }
}