<?php
$servername = "localhost";
$user = "root";
$passw = "";
$dbname = "teszt3";
$conn = mysqli_connect($servername, $user, $passw, $dbname);
if (!$conn) {
    die("connection failed:" . mysqli_connect_error());
}
global $conn;
function query($query){
    global $conn;
    $result=mysqli_query($conn, $query);
    if($result==false){
        $error="Cannot execute query: <br>";
        $error.=$query."<br>";
        $error.="Error message: "+mysqli_error($conn)."(".mysqli_errno($conn).")";
        echo $error;
    }
    return $result;
}
