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
        <form>
            <fieldset class="form-group">
                <label>Username:</label>
                <input type="text" name='uname'>
            </fieldset>
            <fieldset class="form-group">
                <label>Password:</label>
                <input type="password" name='passw'>
            </fieldset>
        </form>
    </body>
</html>