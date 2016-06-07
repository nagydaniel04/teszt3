<?php include_once 'connect.php';?>
<thtml>
    <head>
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
                padding: 15px;
                padding-left: 35px;
                padding-right: 35px;
                text-align: center;
                background-color: greenyellow;
            }
            #registration{
                padding: 15px;
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
</thtml>
