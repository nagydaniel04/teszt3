<?php
session_start();
include '../model/messageid.php';
$from_id=$_SESSION["newsession"];
//controller
if(isset($_GET["id"])){
    $idg=$_GET["id"];
    $sql="SELECT id, image,name FROM users WHERE id='$idg'";
    $t=query($sql);
    $to=mysqli_fetch_array($t);
    include '../view/messageid.php';
    //getmess($from_id, $idg);
}
if(isset($_POST)&&!isset($_GET["id"])){
    $idp=$_POST["id"];
    $sql="SELECT id,image,name FROM users WHERE id='$idp'";
    $t=query($sql);
    $to=mysqli_fetch_array($t);
    $message=$_POST["message"];
    addmess($from_id,$idp,$message);
    include '../view/messageid.php';
    //getmess($from_id, $idp);
}