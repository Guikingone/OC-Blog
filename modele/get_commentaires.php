<?php
function get_commentaires(){

  global $bdd;

  $req = $bdd->prepare('SELECT auteur, contenu, DATE_FORMAT(date_publication
  , \'%d/%m/%Y à %Hh%imin%ss\') AS date_publication FROM commentaires WHERE id = ?');
  $req->execute(array($_GET['billet']));
  $commentaires = $req->fetchAll();

  return $commentaires;
}
