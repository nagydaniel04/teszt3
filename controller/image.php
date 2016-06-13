<?php
function image() {
    if ($_FILES["fileToUpload"]["name"]) {
        $target_dir = "C:/xampp/htdocs/teszt3/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        $tmp_name=$_FILES["fileToUpload"]["tmp_name"];
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        $imagev = $_FILES["fileToUpload"]["name"];
        move_uploaded_file($tmp_name, $target_file);
        if ($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        }
        else {
            $uploadOk = 0;
            $imagev = NULL;
        }
    }
    else{ 
        $imagev = NULL;
    }
    return $imagev;
}