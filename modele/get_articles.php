<?php
function get_articles($offset, $limit){

  global $bdd;
  $offset = (int) $offset;
  $limit = (int) $limit;

    $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_publication
      , \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM article ORDER BY date_creation DESC LIMIT :offset, :limit');
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req->execute();
    $billets = $req->fetchAll();

    return $billets;
}
