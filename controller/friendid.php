<?php
session_start();
include_once '../model/name.php';
include_once '../model/friendid.php';

//controller
$id=$_SESSION["newsession"];
$image=currentimage($id);
$name=name($id);
$namelistf=namelistaf($id);
include '../view/friends.php';
