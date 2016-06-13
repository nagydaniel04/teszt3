<?php 
include_once '../controller/save.php';
include_once '../controller/grouplist.php';
?>
<html>
    <head>
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
                        <input type="text" name="name"><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email"><br>
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
                    <fieldset class="form-group">
                        <label>Birthday:</label>
                        <input type="text" class="datepicker" name="birthday"><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>Password:</label>
                        <input type="password" name="passw"><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>Password again:</label>
                        <input type="password" name='repassw'><br>
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