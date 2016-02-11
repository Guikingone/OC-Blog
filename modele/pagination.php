<?php
function pagination(){

  global $bdd;

  $req = $bdd->prepare('SELECT COUNT(*) AS nb_articles FROM articles');
  $req->execute();
  $pagination = $req->fetchAll();

  return $pagination;
}
