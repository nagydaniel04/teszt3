<?php//model
include_once '../connect.php';
global $conn;
function name($email){
    $name="SELECT name FROM users WHERE email='$email'";
    $res=query($name);
    $r=mysqli_fetch_array($res);
    return $res;    
}
