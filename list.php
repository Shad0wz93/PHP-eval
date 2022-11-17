
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="list.css">
    
        <title>list de livre</title>
    </head>
    <body>

    <?php
        require "connect.php";


    ?>
    <div class="texte">
            <div class="element">
    
                <table border="3" cellpadding="25" >
                <tr>
                    <td>id</td>
                    <td> titre</td>
                    <td>synopsis </td>
                    <td> auteur</td>
                    <td> parution</td>        
                </tr>
                
                    <?php

                    $list = $dbh->prepare ('SELECT * FROM livres ');

                        $list->execute();
                        $list = $list-> fetchAll();

                        foreach($list as $livre) { ?>

                            <tr>

                            <td> <?php echo $livre['id'] ?> </td>
                            <td> <?php echo $livre['titres'] ?></td>
                            <td> <?php echo $livre['synopsis'] ?></td>
                            <td> <?php echo $livre['auteur']?></td>
                            <td> <?php echo $livre['parution'] ?> </td>
                                
                            </tr>

                    <?php   }

                    ?>  
                
                </table>
            </div>    
                
        </div>
        
    </body>
</html>
