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
        <h1><?php echo $to_email["name"]; ?></h1>
        <form method="POST" action="../controller/message.php">
            <input type="hidden" name="email" value="<?php echo $to_email["email"]; ?>">
            <input type="hidden" name="id" value="<?php echo $to_email["id"]; ?>">
            <input type="text" 
                   cols="100" 
                   rows="15" style="width:70%; height:50px;" 
                   name="message"
                   id="mess" >
            <input type="submit" id="submit" name="send" value="Send">
        </form>
    </body>
</html>

