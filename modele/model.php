<?php
function open_connexion(){
  /* On se connecte via PDO, on attrappera les Exceptions au besoin afin d'éviter les fuites de données */
  try{
    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
  }
  catch(Exception $e){
    die('Erreur : '.$e->getMessage());
  }
  return $bdd;
}

function close_connection($bdd)
{
  $bdd = null;
}

function get_articles()
{
  $bdd = open_connexion();

  $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_publication
  , \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM article ORDER BY date_creation');
  $posts = array();
  while($row = $req->fetch(PDO::FETCH_ASSOC)){
    $posts[] = $row;
  }
  close_connection($bdd);

  return $posts;
}

function get_articles_by_id()
{
  $bdd = open_connexion();
  $id = intval($id);

  $req = $bdd->prepare('SELECT id, titre, contenu, auteur, DATE_FORMAT(date_publication
  , \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM article WHERE id = ' . $id);
  $row = $req->fetch(PDO::FETCH_ASSOC);
  close_connection($bdd);

  return $row;
}
