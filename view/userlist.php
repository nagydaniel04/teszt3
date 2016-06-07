
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
        </style>
    </head>
    <body>
        <h1>Welcome <?php echo $name; ?></h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Message</th>
            </tr>
        <?php
        if(!$namelist){
            echo 'No users';
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
                    <td><button value=""><a href="../controller/message.php?id=<?php echo $val["id"]; ?>">Send Message</a></button></td>
                </tr>
                <?php
            }
        }
        ?>
        </table>
    </body>
</html>