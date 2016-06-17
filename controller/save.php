<?php
if(isset($_GET["re"])==1){
    echo '<h3>Failed</h3>';
//    if(isset($okname)==0){
//        echo '<h4>The name is incorrect<h4>';
//    }
//    if(isset($okmail)==0){
//        echo '<h4>The email is incorrect<h4>';
//    }
//    if(isset($okpass)==0){
//        echo '<h4>The password or password again is incorrect<h4>';
//    }
//    if(isset($okcountry)==0){
//        echo '<h4>The country is incorrect<h4>';
//    }
//    if(isset($okcounty)==0){
//        echo '<h4>The county is incorrect<h4>';
//    }
}
include '../model/save.php';
include '../model/validation.php';
if($_POST){    
    $okname=regname($_POST["name"]);
    $okmail=regmail($_POST["email"]);
    $okpass=regpass($_POST["passw"],$_POST["repassw"]);
    $okcountry=regcountry($_POST["country"]);            
    $okcounty=regcounty($_POST["county"]);
    if($okname&&$okmail&&$okpass&&$okcountry&&$okcounty){
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