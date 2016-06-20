<?php 
include_once '../controller/save.php';
include_once '../controller/grouplist.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <style>
            body{
                background-color: #fafafa;
            }
            h1{                
                border: 35px solid lightcyan; 
                background-color: lightcyan; 
                text-align: left;
            }
            .form-group{
                border: 0px;
            }
            fieldset{
                border: 0px;
            }
            label{
                color: grey;
            }
            input,select{
                padding: 10px;
                border-radius: 7px;
                border-color:#A9A9A9;
            }
            input:focus{
                border-radius: 5px;
                border-color: blue;
                border : 6px;
            }
            select:focus{
                border-radius: 5px;
                border-color: blue;
                border : 6px;
            }
            .warp{
                width: 100%;
            }
            .left{
                float: left;
                width: 29%;
                padding-left: 15px;
            }
            .rigth{ 
                border-left: 3px solid black;
                padding-left: 15px;
                float: right;
                width: 69%;                
            }
            select:focus{
                border-radius: 3px;
                border-color: blue;
            }
            .fa-user{
                font-size: 45px;
                color: A9A9A9;
                margin-right: 10px;
            }
            .fa-envelope-o{
                font-size: 40px;
                color: A9A9A9;
                margin-right: 10px;
            }
            .fa-globe{
                font-size: 40px;
                color: A9A9A9;
                margin-right: 10px;
            }
            .fa-camera-retro{
                font-size: 40px;
                color: A9A9A9;
                margin-right: 10px;
            }
            .fa-birthday-cake{
                font-size: 40px;
                color: A9A9A9;
                margin-right: 10px;
            }
            .fa-map-marker{
                font-size: 40px;
                color: A9A9A9;
                margin-right: 20px;
            }
            .fa-lock{
                font-size: 40px;
                color: A9A9A9;
                margin-right: 20px;
            }
            .fa-repeat{
                font-size: 40px;
                color: A9A9A9;
                margin-right: 20px;
            }
            .fa-users{
                font-size: 40px;
                color: A9A9A9;
                margin-right: 20px;
            }
            
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#email").focusout(function(){
                    $.ajax({
                        url:"../model/emailvalid.php",
                        method:"POST",
                        data:{email:$("#email").val()}
                    }).success(function(result){
                        $("#okmail").html(result);
                    });
                });
            });
        </script>
        <script>
            $(document).ready(function () {                
                $("#country").change(function () {
                    $.ajax({
                        url: "find_counties.php",
                        method: "POST",
                        data: {id: $("#country").val()}
                    }).success(function (result) {
                        $("#county").html(result);
                    });
                });
            });
        </script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script>
            $(function () {
                $(".datepicker").datepicker();
            });
        </script>
        <script>
            $(document).ready(function () {
                $("#addbutton").click(function (event) {
                    $.ajax({
                        url: "../controller/grouplist.php",
                        method: "POST",
                        data: {group: $("#addgroup").val(), xaction: "addnewgroup"}
                    }).success(function (result) {
                        $("#groups").append(result);
                    });
                    event.preventDefault();
                });
            });
        </script>
        <script>
        $(document).ready(function () {
                $(".form").submit(function (event) {
                    //nev
                    var name = $("#name").val();
                    var resn = name.match(/[A-Z][a-z]+ [A-Z][a-z]+/g);
                    if (resn!=name) {
                        event.preventDefault();
                        alert("nem helyes a nev");
                    }
                    //email
                    var email = $("#email").val();
                    //alert(email);
                    var rese = email.match(/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/);
                    //alert(rese);
                    if (rese!=email) {
                        event.preventDefault();
                        alert("nem helyes az email");
                    } else {
                        //alert("helyes az email");
                    }
                    //country
                    if ($("#country").val() == 'default') {
                        event.preventDefault();
                        alert('nincs kivalasztva orszag');
                    } else {
                        //alert('ki van valsztva az orszag');
                    }
                    if ($("#county").val() == 'default') {
                        event.preventDefault();
                        alert('nincs kivalasztva megye');
                    } else {
                        //alert('ki van valsztva a megye');
                    }
                    if ($("#passw").val() == '') {
                        event.preventDefault();
                        alert('nincs jelszo');
                    }
                    if ($("#repassw").val() != $("#passw").val()) {
                        event.preventDefault();
                        alert('nem azonosak a jelszavak');
                    }
                });
            });
        </script>
        <script>
            function onBlur(el) {
                if (el.value == '') {
                    el.value = el.defaultValue;
                }
            }
            function onFocus(el) {
                if (el.value == el.defaultValue) {
                    el.value = '';
                }
            }
            function makeItPassword()
            {
               document.getElementById("passcontainer")
                  .innerHTML = "<input id=\"password\" name=\"passw\" type=\"password\"/>";
               document.getElementById("password").focus();
            }            
            function makeItrePassword()
            {
               document.getElementById("repasscontainer")
                  .innerHTML = "<input id=\"repassword\" name=\"repassw\" type=\"password\"/>";
               document.getElementById("repassword").focus();
            }
            
        </script>
    </head>
    <body>
        <h1>Registration</h1>
        <a style="text-align: right;" href="../controller/login.php">Login</a>
        <form method="POST" action="../controller/save.php" class="form" enctype="multipart/form-data">
            <div class="warp">
                <div class="left">
                    <fieldset class="form-group">
                        <input type="hidden">
                        <i class="fa fa-camera-retro" aria-hidden="true"></i><br>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <img>
                    </fieldset>
                </div>
                <div class="rigth">
                    <fieldset class="form-group">
<!--                        <label>Name:</label>-->
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" name="name" id="name" value="Name" onblur="onBlur(this)" onfocus="onFocus(this)" /><br>
                    </fieldset>
                    <fieldset class="form-group">
                         <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="text" name="email" id="email" value="Email" onblur="onBlur(this)" onfocus="onFocus(this)" /><label id="okmail"></label><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <select name="country" id="country">
                            <option value="default">Choose a country</option>
                            <?php countries(); ?>
                        </select><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <select name="county" id="county">
                            <option value="default">Choose a county</option>
                        </select><br>
                    </fieldset>
                    <fieldset class="form-group" id="birthday"  >
                        <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                        <input type="text" class="datepicker" name="birthday" value="Birthday" onblur="onBlur(this)" onfocus="onFocus(this)" /><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <span id="passcontainer">
                            <input type="text" name="passw" onfocus="return makeItPassword()" value="Password" id="passw"><br>
                        </span>
                    </fieldset>
                    <fieldset class="form-group">
                        <i class="fa fa-repeat" aria-hidden="true"></i>
                        <span id="repasscontainer">
                            <input type="text" name='repassw' onfocus="return makeItrePassword()" value="Password again" id="repassw"><br>
                        </span>
                    </fieldset>
                    <fieldset class="form-group">
                        <i class="fa fa-users" aria-hidden="true"></i><br>
                        <spam id="groups"><?php grouplist(); ?></spam>
                        <label>Add group:</label><br>
                        <input type="text" id="addgroup" class="a" name="addgroup">
                        <button id="addbutton">Add group</button>
                        <br>                        
                    </fieldset>          
                    <fieldset class="form-group">
                        <input type="submit">
                    </fieldset>
                </div>
            </div>
        </form>
    </body>
</html>