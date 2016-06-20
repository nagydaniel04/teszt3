<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <style>
            h1{
                border: 35px solid lightcyan; 
                background-color: lightcyan; 
                text-align: left;
            }
            fieldset{
                text-align: center;
                border: 0px;
            }
            label{
                color: gray;
            }
            input{
                margin-left: 25px; 
                padding: 10px;
                border-radius: 5px;
                border-color: lightgray;
            }
            input:focus{
                 border-radius: 5px;
                 border-color: blue;
                 border : 6px;
            }
/*            #passcontainer{
                background-image: url("../image/lakat.jpg");
                background-size: 25px 25px;
            }*/
            .fa-envelope-o{
                /*background-image: url("../image/person.jpg");*/
                font-size: 40px;
                color: A9A9A9;
            }
            .fa-lock{
                font-size: 45px;
                color: A9A9A9;
                margin-right: 10px;
            }
        </style>
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
                  .innerHTML = "<input id=\"password\" name=\"password\" type=\"password\"/>";
               document.getElementById("password").focus();
            }
            
        </script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script>
//            $(document).ready(function(){
//               $(#password).focusout(function(event){
//                   document.getElementById("passcontainer")
//                  .innerHTML = "<input id=\"password\" name=\"password\" type=\"text\" value=\"Password"\/>";
//               }); 
//            });
        </script>
    </head>
    <body>
        <h1>Login</h1>
        <a style="text-align: right;" href="../controller/save.php">Registration</a>
        <form class="form" method="POST" action="../controller/login.php" class="form">
            <fieldset class="form-group">
<!--                <label>Email:</label>-->
<!--                <spam id="email"></spam>-->
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <input type="text" name='email' value="Email" onblur="onBlur(this)" onfocus="onFocus(this)" />
            </fieldset>
            <fieldset class="form-group">
<!--                <label>Password:</label>-->
<!--                <span id="passcontainer">-->
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input id="password" onfocus="return makeItPassword()" name="passw" type="text" value="Password" />
            </fieldset>
            <fieldset class="form-group">
                <input type="submit" name="submit" value="Login">
            </fieldset>
        </form>
    </body>
</html>