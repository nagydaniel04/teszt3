<?php
include_once '../connect.php';
global $conn;
function isuser($mail,$pass){
    $is="SELECT email,password FROM users WHERE email='$mail' AND password='$pass'";
    $result=query($is);
    $q=mysqli_fetch_array($result);
    if(!$q){
        return 0;
    }
    else return 1;
}
