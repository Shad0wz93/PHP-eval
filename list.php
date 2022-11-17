<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>list de livre</title>
</head>
<body>

    <?php
        require 'connect.php';
    ?>

    <div class="texte">
        <div class="element">
 
            <table border="2" cellpadding="12" >
                <tr>
                    <td>id</td>
                    <td> titre</td>
                    <td>synopsis </td>
                    <td> auteur</td>
                    <td> parution</td> 
                    <td>action</td>       
                </tr>
            
                <?php

                   $list = $dbh->prepare ('SELECT * From livres');

                    $list->execute();
                    $list = $list-> fetchAll();

                    foreach($list as $livre) { ?>

                        <tr>

                        <td> <?php echo $livre['id'] ?> </td>
                        <td> <?php echo $livre['titres'] ?></td>
                        <td> <?php echo $livre['synopsis'] ?></td>
                        <td> <?php echo $livre['auteur']?></td>
                        <td> <?php echo $livre['parution'] ?> </td>
                        <td><?php' . $livre['url'] . ' ?></td>
<p>


<td>       <a class="btn" href="edit.php?id=' <php. $livre['id'] . '">Read</a>
                            </td>
<p>


<td><a class="btn btn-success" href="update.php?id=' . $livre['id'] . '">Update</a>
                            </td>
<p>


<td><a class="btn btn-danger" href="delete.php?id=' . $livre['id'] . ' ">Delete</a>
                            </td>
<p>
</tr>
<p>


                        
                            
                        </tr>

                 <?php   }

                ?>  
              
            </table>
            <a href="create.php"> <u>Interressez pour ajouter un livre? cliquer ici</u></a>
        </div>    
            
    </div>


</body>
</html>