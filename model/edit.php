<?php
include_once '../connect.php';
global $conn;
/* 
 * model
 */
function getdata($id){
    global $conn;
    $sql="SELECT * FROM users WHERE id='$id'";
    $q=query($sql);
    while($res=mysqli_fetch_array($q)){
        return $res;
    }
}
function county($id){
    $sql="SELECT name FROM county WHERE id='$id'";
    $q=query($sql);
    while($row=mysqli_fetch_array($q)){
        return $row["name"];
    }
}
function edit($obj) {
    global $conn;
    $id=$obj["id"];
    $uname = $obj["name"];
    $sql="SELECT id FROM users WHERE name='$uname'";
    $q=query($sql);
    while ($row=  mysqli_fetch_array($q)){
        $id=$row["id"];
    }
    if(isset($obj["fileToUpload"])){
        $image=$obj["fileToUpload"];
    }
    else{
        $image=$obj["lastimage"];
    }
    $email = $obj["email"];
    $country_id = $obj["country"];
    $county_id = $obj["county"];
    $birthday = $obj["birthday"];
    $pass = password_hash($obj["passw"], PASSWORD_BCRYPT);    
    $edit = "UPDATE `users` SET `image`='$image', `name`='$uname',`email`='$email',`country_id`='$country_id',`county_id`='$county_id',`birthday`='$birthday',`password`='$pass' WHERE id='$id'";
    $res = query($edit);
}
function country(){
    global $conn;
    $sql="SELECT id,name FROM country";
    $query=  query($sql);
    return $query;
}
function countries($cid){
    $countries=country();
    foreach ($countries as $val){
        if($cid==$val["id"]){
            ?>
                <option name="country_id" value="<?php echo $val["id"]; ?>" selected><?php echo $val["name"]; ?></option>
            <?php
        }
        else{
            ?>
                <option name="country_id" value="<?php echo $val["id"]; ?>"><?php echo $val["name"]; ?></option>
            <?php
    }
    }
}
function groupliste($id){
    $sql="SELECT gid FROM ug WHERE uid='$id'";
    $q=query($sql); 
    $sql2="SELECT * FROM `group`";
    $groups=query($sql2);    
    while ($row=mysqli_fetch_array($q)){
        while($r=mysqli_fetch_array($groups)){
            if($row["gid"]==$r["id"]){
            ?>
            <input type="checkbox" name="group[]" value="<?php echo $r["id"]; ?>">
            <label><?php  echo $r["name"]; ?></label><br>
            <?php
            }
            else{
            ?>
            <input type="checkbox" name="group[]" value="<?php  echo $r["id"]; ?>" checked="checked">
            <label><?php echo $r["name"]; ?></label><br>
            <?php
            }
        }
    }
}


