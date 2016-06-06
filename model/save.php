<?php//model
include_once '../connect.php';
global $conn;

function add($obj) {
    global $conn;
    $uname = $obj["name"];
    $email = $obj["email"];
    $country_id = $obj["country"];
    $county_id = $obj["county"];
    $birthday = $obj["birthday"];
    $pass = $obj["passw"];
    //add
    $add = "INSERT INTO `users`(`name`, `email`, `country_id`, `county_id`, `birthday`, `password`) "
            . "VALUES ('$uname','$email','$country_id','$county_id','$birthday','$pass')";
    $res = query($add);
    return $res;
}

function edit($obj) {
    global $conn;
    $uname = $obj["name"];
    $email = $obj["email"];
    $country_id = $obj["country"];
    $county_id = $obj["county"];
    $birthday = $obj["birthday"];
    $pass = $obj["passw"];    
    $edit = "UPDATE `users` SET `name`='$name',`email`='$email',`country_id`='$country_id',`county_id`='$county_id',`birthday`='$birthday',`password`='$pass'";
    $res = query($edit);
}

