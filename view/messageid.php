<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script>
        from=<?php echo $from_id; ?>;
        to=<?php echo $to["id"]; ?>;
        $(document).ready(function(){
            setInterval(function(){
            $.ajax({
                url:'ajax.php',
                method:'POST',
                data:{from:from,to:to}
            }).success(function (result) {
            $("#message").html(result);
            });
            },200);
        });
        
        </script>
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
        <h1><img src="../<?php echo $to["image"]; ?>"style="width: 150px; height: 150px;"><?php echo $to["name"]; ?></h1>
        <p><a href="../controller/userlist.php">Back to list</a></p>
        <form method="POST" action="../controller/messageid.php">
            <input type="hidden" name="id" value="<?php echo $to["id"]; ?>">
            <input type="text" 
                   cols="100" 
                   rows="15" style="width:70%; height:50px;" 
                   name="message"
                   id="mess" >
            <input type="submit" id="submit" name="send" value="Send">
        </form>
        <label id="message"></label>
    </body>
</html>
