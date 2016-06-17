<?php
include_once '../connect.php';
global $conn;
if(isset($_POST)){
    $email=$_POST["email"];
    $sql="SELECT email FROM users WHERE email='$email'";
    $qu=query($sql);
    $q=mysqli_fetch_array($qu);
    if(!$q&&!empty($email)&&(!filter_var($email, FILTER_VALIDATE_EMAIL) === false)&&strlen($email) < 30){
        $ok=1;
        echo '  ok mail';
    }
    else{
        if($q){
            echo '  email already exist';
        }
        else{
            if(strlen($email) > 30){
                echo '  it`s too long';
            }
            else{
                if(empty($email)){
                    echo '  email is empty';
                }
                else{
                    echo '  it`s not an email';
                }
            }            
        }
    }
}

