<?php
include '../model/grouplist.php';
if(isset($_POST["group"])&& filter_input(INPUT_POST, "xaction")=="addnewgroup" ){
    $grp = $_POST["group"];
    //var_dump($grp);
    $ok=addgroup($grp);
    if($ok){
        foreach ($ok as $val){
            ?>
            <input type="checkbox" class="roundedTwo" name="group[]" value="<?php echo $val["id"]; ?>">
            <label><?php echo $val["name"]; ?></label><br>
            <?php
        }    
    }
}
function grouplist(){
    $groups=groups();
    foreach($groups as $val){
        ?>
            <input type="checkbox" class="roundedTwo" name="group[]" value="<?php echo $val["id"]; ?>">
        <label><?php echo $val["name"]; ?></label><br>
        <?php
    }
}

