<?php
include '../model/isuser.php';
global $conn;
$ok=isuser($_POST["email"], $_POST["passw"]);
if($ok){
    session_start();
    $_SESSION["newsession"]=$_POST["email"];
    $newURL='../controller/userlist.php';
    header('Location: '.$newURL);
}
else{
    echo '<h3> Incorrect Email or Password <h3>';
    include '../view/login.php';
}