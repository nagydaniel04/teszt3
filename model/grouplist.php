<?php
include_once '../connect.php';
global $conn;
function groups(){
    $sql="SELECT * FROM `group`";
    $query=query($sql);
    return $query;
}
function isinlist($x){
    $sql="SELECT `name` FROM `group` WHERE name='$x'";
    $y=query($sql);
    $z=mysqli_fetch_array($y);
    if($z){
        return 1;
    }
    else {
        return 0;
    }
}
function addgroup($group){
    $ok=isinlist($group);
    if(!$ok){
        $sql="INSERT INTO `group`(`name`) VALUES ('$group')";
        $query=query($sql);
        if($query){
            $sqli="SELECT `id`, `name` FROM `group` WHERE name='$group'";
            $queryy=query($sqli);
            return $queryy;
        }
    }
    else return 0;
}


