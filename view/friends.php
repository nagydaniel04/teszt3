<html>
    <head>
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
            #logout{
                text-align: right;
            }
        </style>
    </head>
    <body>
       <h1><img src="../<?php echo $image; ?>" style="width: 150px; height: 150px">Welcome <?php echo $name; ?></h1>
       <a href="../controller/userlist.php" >All users</a><p id="logout"><a  href="../controller/login.php?log=1">Log out</a></p><br>
        <table>
            <tr>
                <th>Name</th>
                <th>Message</th>
            </tr>
        <?php
        if(!$namelistf){
            echo '<p>No users</p>';
        }
        else{
            foreach($namelistf as $val){
                ?>
                <tr>
                    <td>
                    <?php
                    echo $val["name"];
                    ?>
                    </td>
                    <td><button value=""><a href="../controller/message.php?id=<?php echo $val["id"]; ?>">Send Message</a></button></td>
                </tr>
                <?php
            }
        }
        ?>
        </table>
    </body>
</html>