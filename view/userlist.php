
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <meta charset="UTF-8">
        <style>
             h1{
                border: 35px solid lightcyan; 
                background-color: lightcyan;
                text-align: center;
            }
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                text-align: left;
                padding: 8px;
            }
            tr:nth-child(even){background-color: #f2f2f2}
            button{
                border-color: gray;
                border-radius: 5px;
                padding: 10px;
            }
            #button1{
                float:left; 
            }
            #button3{
                float: right; 
            }
            #button2{
                float: right; 
            }
            
        </style>
    </head>
    <body>
        <h1><img src="../<?php echo $image; ?>" style="width: 150px; height: 150px;">Welcome <?php echo $name; ?></h1>
        <button id="button1"><a href="../controller/friendid.php" >Friends messages</a></button>
        <button id="button3"><a  href="../controller/login.php?log=1">Log out</a></button>
        <button id="button2"><a  href="../controller/edit.php?id=<?php echo $id;?>">Edit</a></button><br>
        <table>
            <tr>
                <th>Name</th>
                <th>Message</th>
            </tr>
        <?php
        if(!$namelist){
            echo '<p>No users</p>';
        }
        else{
            foreach($namelist as $val){
                ?>
                <tr>
                    <td>
                    <?php
                    echo $val["name"];
                    ?>
                    </td>
                    <td><button value=""><a href="../controller/messageid.php?id=<?php echo $val["id"]; ?>">Send Message</a></button></td>
                </tr>
                <?php
            }
        }
        ?>
        </table>
    </body>
</html>