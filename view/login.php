<html>
    <head>
        <style>
            h1{
                border: 35px solid lightcyan; 
                background-color: lightcyan; 
                text-align: center;
            }
            fieldset{
                text-align: center;
                border: 0px;
            }
            label{
                color: gray;
            }
            input{
                border-radius: 5px;
                border-color: lightgray;
            }
            input:focus{
                 border-radius: 3px;
                 border-color: blue;
            }
        </style>
    </head>
    <body>
        <h1>Login</h1>
        <a style="text-align: right;" href="../controller/save.php">Registration</a>
        <form class="form" method="POST" action="../controller/login.php" class="form">
            <fieldset class="form-group">
                <label>Email:</label>
                <input type="text" name='email'>
            </fieldset>
            <fieldset class="form-group">
                <label>Password:</label>
                <input type="password" name='passw'>
            </fieldset>
            <fieldset class="form-group">
                <input type="submit" name="submit" value="Login">
            </fieldset>
        </form>
    </body>
</html>