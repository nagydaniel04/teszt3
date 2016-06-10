<?php
include_once '../connect.php';
global $conn;
//model
function namelistf($mail){
    $q="SELECT to_email FROM message WHERE from_email='$mail'";
    $query=query($q);
    $namelist=array();
    foreach ($query as $val){ 
        $x=$val["to_email"];
        $sql="SELECT id,name, email FROM users WHERE email='$x'";
        $res=query($sql);  
        $value=  mysqli_fetch_array($res);
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