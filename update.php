<?php
  require 'connect.php';
  $nom = '';
  $prenom = '';

  $conn->query(" UPDATE livre SET id = '$id', titre = '$titre', synopsis = '$synopsis', auteur = '$auteur', parution = '$parution' WHERE id=10 ");
  
?>