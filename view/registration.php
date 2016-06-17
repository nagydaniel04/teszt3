<?php 
include_once '../controller/save.php';
include_once '../controller/grouplist.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            h1{                
                border: 35px solid lightcyan; 
                background-color: lightcyan; 
                text-align: center;
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
                border-radius: 5px;
                border-color:  lightgray;
            }
            input:focus{
                border-radius: 3px;
                border-color: blue;
            }
            .warp{
                width: 100%;
            }
            .left{
                float: left;
                width: 29%;
            }
            .rigth{ 
                border-left: 3px solid black;
                float: right;
                width: 69%;                
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
    </head>
    <body>
        <h1>Registration</h1>
        <a style="text-align: right;" href="../controller/login.php">Login</a>
        <form method="POST" action="../controller/save.php" class="form" enctype="multipart/form-data">
            <div class="warp">
                <div class="left">
                    <fieldset class="form-group">
                        <input type="hidden">
                        <label>Profile picture:</label><br>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <img>
                    </fieldset>
                </div>
                <div class="rigth">
                    <fieldset class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" id="name"><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email" id="email"><label id="okmail"></label><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>Country:</label>
                        <select name="country" id="country">
                            <option value="default">Choose a country</option>
                            <?php countries(); ?>
                        </select><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>County:</label>
                        <select name="county" id="county">
                            <option value="default">Choose a county</option>
                        </select><br>
                    </fieldset>
                    <fieldset class="form-group" id="birthday">
                        <label>Birthday:</label>
                        <input type="text" class="datepicker" name="birthday"><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>Password:</label>
                        <input type="password" name="passw" id="passw"><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>Password again:</label>
                        <input type="password" name='repassw' id="repassw"><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <h3>Groups:</h3>
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