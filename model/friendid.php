<?php
include_once '../connect.php';
global $conn;
//model
function namelistaf($id){
    $q="SELECT DISTINCT to_id FROM message WHERE from_id='$id'";
    $query=query($q);
    $namelist=array();
    foreach ($query as $val){ 
        $x=$val["to_id"];
        $sql="SELECT id,name, email FROM users WHERE id='$x'";
        $res=query($sql);  
        $value=  mysqli_fetch_array($res);
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
