<?php
session_start();
include_once '../model/name.php';
include_once '../model/friends.php';

//controller
$mail=$_SESSION["newsession"];
$image=  currentimage($mail);
$name=name($mail);
$namelistf=namelistf($mail);
include '../view/friends.php';