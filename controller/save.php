<?php
if(isset($_GET["re"])==1){
    echo '<h3>Failed</h3>';
}
include '../model/save.php';
include '../model/validation.php';
if($_POST){
    $okname=regname($_POST["name"]);
    $okmail=regmail($_POST["email"]);
    $okpass=regpass($_POST["passw"],$_POST["repassw"]);
    $okcountry=regcountry($_POST["country_id"]);            
    $okcounty=regcounty($_POST["county_id"]);
    if($okname&&$okmail&&$okpass&&okcountry&&okcounty){
        $ok=add($_POST);
        if($ok){
            echo 'Succes';
            //controller
            $url='../controller/login.php';
            header('Location: '.$url);
        }
    }
    else{
        header("Refresh:1 ; save.php?re=1");
    }
}

include '../view/registration.php';

function countries(){
    $countries=country();
    foreach ($countries as $val){
    ?>
        <option name="country_id" value="<?php echo $val["id"]; ?>"><?php echo $val["name"]; ?></option>
    <?php
    }
}