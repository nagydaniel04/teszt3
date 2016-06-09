<?php
include_once '../connect.php';
include_once '../model/find.php';
if(isset($_POST)){
    $id=$_POST["id"];
    var_dump($id);
    $counties=find($id);
    foreach ($counties as $val){
    ?>
        <option name="county_id" value="<?php echo $val["id"]; ?>"><?php echo $val["name"]; ?></option>
    <?php
    }
}