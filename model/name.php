<?php
include_once '../connect.php';
global $conn;
//model
function name($mail){
    $name="SELECT name FROM users WHERE email='$mail'";
    $res=query($name);
    foreach($res as $val){
        return $val["name"];
    }         
}
function namelist($mail){    
    $sql="SELECT id,name, email FROM users";
    $res=query($sql);  
    $namelist=array();
    foreach($res as $value){
        if($mail!=$value["email"]){
            $namelist[]=$value;
        }
    }    
    if(!empty($namelist)){
        return $namelist;        
    }
    else{
        return 0;
    }
}
function currentimage($mail){
    $image="SELECT image FROM users WHERE email='$mail'";
    $query=query($image);
    foreach($query as $val){
        return $val["image"];
    }  
}