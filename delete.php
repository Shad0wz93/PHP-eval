<?php require 'connect.php'; $id=0; if(!empty($_GET['id'])){ $id=$_REQUEST['id']; } if(!empty($_POST)){ $id= $_POST['id']; $dbh=Database::connect(); $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "DELETE FROM livres  WHERE id = ?";
        $q = $dbh->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
        header("Location: list.php");
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    
</head>
 
<body>

<br />
<div class="container">
     
<br />
<div class="span10 offset1">

<br />
<div class="row">

<br />
<h3>supprimer un livre</h3>
<p>

</div>
<p>                   
<br />
<form class="form-horizontal" action="delete.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $id;?>"/>
                      
tu veux vraiment le supprimer?

<br />
<div class="form-actions">
                          <button type="submit" class="btn btn-danger">oui</button>
                          <a class="btn" href="list.php">Non</a>
</div>
<p>

                    </form>
<p>
</div>
<p>

                 
</div>
<p>
<!-- /container -->
  </body>
</html>
