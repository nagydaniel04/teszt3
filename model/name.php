<?php
include_once '../connect.php';
global $conn;
//model
function name($id){
    $name="SELECT name FROM users WHERE id='$id'";
    $res=query($name);
    foreach($res as $val){
        return $val["name"];
    }         
}
function namelist($id){    
    $sql="SELECT id,name, email FROM users";
    $res=query($sql);  
    $namelist=array();
    foreach($res as $value){
        if($id!=$value["id"]){
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
function currentimage($id){
    $image="SELECT image FROM users WHERE id='$id'";
    $query=query($image);
    foreach($query as $val){
        return $val["image"];
    }  
}