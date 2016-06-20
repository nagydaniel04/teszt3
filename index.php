<?php 
ini_set("log_errors", 1);
ini_set("error_log", "php-error.log");
error_log( "Hello, errors!" );
include_once 'connect.php';
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
            .buttons{                
                text-align: center;
            }
            #login{
                border-color: gray;
                border-radius: 5px;
                padding: 10px;
                padding-left: 35px;
                padding-right: 35px;
                text-align: center;
                background-color: greenyellow;
            }
            #registration{
                border-color: gray;
                border-radius: 5px;
                padding: 10px;
                text-align: center;
                background-color: dodgerblue;
            }            
        </style>
    </head>
    <body>
        <h1>Alternativ Facebook</h1><br>
        <div class="buttons">
            <button id="login"><a href="controller/login.php">Login</a></button>
            <button id="registration"><a href="controller/save.php">Registration</a></button>
        </div>
    </body>
</html>
