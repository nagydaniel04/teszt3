<?php
include '../connect.php';
global $conn;
//model
function messageto($id){
    $sql="SELECT email,name,id FROM users WHERE id='$id'";
    $result=query($sql);
    foreach ($result as $val){
        return $val;
    }
}
function insertinmessage($from, $to,$mess){
    if($from&&$to&&$mess){
        $sql="INSERT INTO message(from_email,to_email,messages) VALUES ('$from','$to','$mess')";
        $result=query($sql);
    }
    return $result;
}
function messagelist($from,$to){
    $sql="SELECT * FROM message WHERE from_email='$from' AND to_email='$to'";
    $messages=query($sql);
    while ($row= mysqli_fetch_array($messages)){
        echo $row["from_email"].'->'.$row["to_email"].'  :  '.$row["messages"]; ?><br><?php
    }
    //return $messages;            
}
