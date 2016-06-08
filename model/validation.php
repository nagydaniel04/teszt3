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
    if (!empty($email) && strlen($email) < 30 && (filter_var($email, FILTER_VALIDATE_EMAIL) === true)){
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

