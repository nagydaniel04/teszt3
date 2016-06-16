<?php
include_once '../connect.php';
global $conn;
function isuser($mail,$pass){    
    $is="SELECT id,email,password FROM users WHERE email='$mail'";
    $result=query($is);
    $q=mysqli_fetch_array($result);
    $passw=password_verify($pass, $q["password"]);
    if(!$q&&$passw){
        return 0;
    }
    else return $q["id"];
}
