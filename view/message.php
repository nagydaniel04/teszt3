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
            .from{
                color: blue;
            }
            .to{
                color:darkgray;
            }
        </style>
    </head>
    <body>
        <h1><img src="../<?php echo $to_email["image"]; ?>"style="width: 150px; height: 150px"><?php echo $to_email["name"]; ?></h1>
        <p><a href="../controller/userlist.php">Back to list</a></p>
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
