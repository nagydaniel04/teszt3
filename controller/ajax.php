<?php
include '../model/messageid.php';
$from=$_POST["from"];
$to=$_POST["to"];
getmess($from, $to);
