<?php
include_once '../connect.php';
global $conn;
function find($cid){
    $sql="SELECT id, name FROM county WHERE country_id='$cid'";
    $query=query($sql);
    return $query;
}

