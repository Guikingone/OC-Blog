<?php
// On récupère les articles afin de les afficher sur la page d'accueil
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

// On récupère les articles via leur ID afin d'en afficher le contenu dans la page de commentaires
function get_articles_by_id(){

  global $bdd;

  $req = $bdd->prepare('SELECT id, titre, contenu, auteur, DATE_FORMAT(date_publication
  , \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM article WHERE id = ?');
  $req->execute(array($_GET['billet']));
  $billetsID = $req->fetch();

  return $billetsID;
}

// On récupère le nombre d'articles dans la table puis on divise ce nombre par le nombre voulu d'article par page
function get_pagination(){

  global $bdd;

  $req = $bdd->prepare('SELECT COUNT(*) AS nb_articles FROM article');
  $req->execute();
  $pagination = $req->fetch();
}
