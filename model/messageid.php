<?php
include_once '../connect.php';
global $conn;
//model message insert with id
function email($id){
    $sql="SELECT id,name,email FROM users WHERE id='$id'";
    $q=query($sql);
    return mysqli_fetch_array($q);
}
function addmess($from, $to,$mess){
    $sql="INSERT INTO message(from_id,to_id,messages) VALUE ('$from','$to','$mess')";
    $q=query($sql);
    return $q;
}
function getmess($from, $to){
    $sql="SELECT * FROM message WHERE (from_id='$from' AND to_id='$to') OR (from_id='$to' AND to_id='$from')";
    $mess=query($sql);
    while($row=mysqli_fetch_array($mess)){
        if($row["from_id"]==$from){
            $mail=email($from);
            ?>
                <nobr><label class="from"><?php echo $mail["name"]; ?>:  </label><label><?php echo $row["messages"]; ?></label></nobr><br>
            <?php
        }
        else{
            $mail=email($to);
            ?>
                <nobr><label class="to"><?php echo $mail["name"]; ?>:  </label><label><?php echo $row["messages"];?></label></nobr><br>
            <?php
        }
    }
}

