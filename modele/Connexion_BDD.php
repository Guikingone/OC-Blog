<?php
/* On se connecte via PDO, on attrappera les Exceptions au besoin afin d'éviter les fuites de données */
try{
  $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
}
catch(Exception $e){
  die('Erreur : '.$e->getMessage());
}
return $bdd;
