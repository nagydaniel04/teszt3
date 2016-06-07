<?php
include_once '../model/message.php';
session_start();
//controller
$from_email=$_SESSION["newsession"];
if($_GET){
    $id=$_GET["id"];
    $to_email=messageto($id);
}
include '../view/message.php';
if($_POST){
    $toe=$_POST["email"];
    $message=$_POST["message"];
    insertinmessage($from_email,$toe,$message);
}

