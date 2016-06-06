
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
    </head>
    <body>
        <h1>Registration</h1>
        <form method="POST" action="../controller/save.php" class="form">
            <div class="warp">
                <div class="left">
                    <fieldset class="form-group">
                        <input type="hidden">
                        <label>Profile picture:</label><br>
                        <input type="file">
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
                        <select name="country">
                            <option value="default">Choose a country</option>
                        </select><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>County:</label>
                        <select name="county">
                            <option value="default">Choose a county</option>
                        </select><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <label>Birthday:</label>
                        <input type="text" name="birthday"><br>
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
                        <label>Groups:</label><br>
                        <input type="checkbox" name="group[]"><br>
                    </fieldset>            
                    <fieldset class="form-group">
                        <input type="submit">
                    </fieldset>
                </div>
            </div>
        </form>
    </body>
</html>