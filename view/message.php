<html>
    <head>
        <style>
            h1{
                border: 35px solid lightcyan; 
                background-color: lightcyan;
                text-align: center;
            }
            form{
                text-align: center;
            }
            </style>
    </head>
    <body>
        <label style="text-align:center;"><?php echo $to_email["email"]; ?></label>
        <form method="POST" action="../controller/message.php">
            <input type="hidden" name="email" value="<?php echo $to_email["email"]; ?>">
            <input type="text" 
                   cols="100" 
                   rows="15" style="width:70%; height:50px;" 
                    name="message">
            <input type="submit" name="send" value="Send">
        </form>
    </body>
</html>

