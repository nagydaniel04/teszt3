<?php
function regname($name){
    $reg="/^[A-Z][a-z]+ [A-Z][a-z]+$/";
    if($name!="" && $name<30 && preg_match($reg,$name)){
        return 1;  
    }
    else {
        return 0;
   }
}
function regmail($email){
    $sql="SELECT email FROM users WHERE email='$email'";
    $q= query($sql);
    if($q){
        $ok=1;
    }
    else{
        $ok=0;
    }
    if ($ok && !empty($email) && strlen($email) < 30 && (!filter_var($email, FILTER_VALIDATE_EMAIL) === false)){
       return 1;
    }
 else{
       return 0;
    }
}
function regpass($pass,$repass){
    if(!empty($pass)&&$pass==$repass){
        return 1;
    }
    else{
        return 0;
    }
}
function regcountry($country){
    if(!empty($country)){
        return 1;
    }
    else {
        return 0;
    }
}
function regcounty($county){
    if(!empty($county)){
        return 1;
    }
    else {
        return 0;
    }
}
//function reg(){
//    if(){
//        return 1;
//    }
//    else {
//        return 0;
//    }
//}

