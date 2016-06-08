<?php
include_once '../model/message.php';
session_start();
//controller
$from_email=$_SESSION["newsession"];
if(isset($_GET["id"])){
    $idg=$_GET["id"];
    $to_email=messageto($idg);
    include '../view/message.php';
}
if(isset($_POST)&&!isset($_GET["id"])){
    $idp=$_POST["id"];
    $to_email=messageto($idp);
    $toe=$to_email["email"];
    $message=$_POST["message"];
    insertinmessage($from_email,$toe,$message);
    include '../view/message.php';
    messagelist($from_email, $toe);
}

   