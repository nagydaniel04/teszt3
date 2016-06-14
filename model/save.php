<?php
include_once '../connect.php';
include '../controller/image.php';
global $conn;
//model
function singlerow($uid,$groupid){
    global $conn;
    $sql="SELECT uid FROM ug WHERE uid='$uid' && gid='$groupid' ";
    $query=query($sql);
    foreach ($query as $val){
        if($val){
            return 1;//ha benne van
        }
        else{
            return 0;//ha nincs benne
        }
    }
}
function add($obj) {
    global $conn;
    $uname = $obj["name"];
    $email = $obj["email"];
    $country_id = $obj["country"];
    $county_id = $obj["county"];
    $birthday = $obj["birthday"];
    $pass = $obj["passw"];
    $image=  image();
    $groups=$_POST["group"];
    //add
    $add = "INSERT INTO `users`(`name`, `email`, `country_id`, `county_id`, `birthday`, `password`,image) "
            . "VALUES ('$uname','$email','$country_id','$county_id','$birthday','$pass','$image')";
    $res = query($add);
    foreach ($groups as $val){
        $uid=mysqli_insert_id($conn);
        if(!singlerow($uid,$val)){
            $sql="INSERT INTO ug(uid,gid) VALUES('$uid','$val')";
            $query=query($sql);
        }
    }
    return $res;
}
function edit($obj) {
    global $conn;
    $uname = $obj["name"];
    $email = $obj["email"];
    $country_id = $obj["country"];
    $county_id = $obj["county"];
    $birthday = $obj["birthday"];
    $pass = $obj["passw"];    
    $edit = "UPDATE `users` SET `name`='$name',`email`='$email',`country_id`='$country_id',`county_id`='$county_id',`birthday`='$birthday',`password`='$pass'";
    $res = query($edit);
}
function country(){
    global $conn;
    $sql="SELECT id,name FROM country";
    $query=  query($sql);
    return $query;
}

