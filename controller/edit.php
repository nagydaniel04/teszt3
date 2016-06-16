<?php
include '../model/edit.php';
/* 
*controller
*/
if(isset($_GET["id"])!=NULL){
    $id=$_GET["id"];
    $data=getdata($id);
    include '../view/edit.php';
}
if(isset($_POST)&&(isset($_GET["id"])==NULL)){
    $x=edit($_POST);
    include 'login.php';    
} 