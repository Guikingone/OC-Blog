<?php
function send_articles()
{

}
/* On récupère les articles afin de les afficher sur la page d'accueil, on sélectionne le nombre d'articles à afficher
via la variable $depart qui part de la page actuelle puis on limite avec $nbrArticlesPrPages afin de n'afficher que x articles par page */
function get_articles($depart, $nbrArticlesPrPages)
{

  global $bdd;

  $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_publication
  , \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM article ORDER BY date_creation DESC LIMIT ' . $depart . ',' . $nbrArticlesPrPages);
  $req->execute();
  $billets = $req->fetchAll();

  return $billets;
}

// On récupère les articles via leur ID afin d'en afficher le contenu dans la page de commentaires
function get_articles_by_id()
{

  global $bdd;

  $req = $bdd->prepare('SELECT id, titre, contenu, auteur, DATE_FORMAT(date_publication
  , \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM article WHERE id = ?');
  $req->execute(array($_GET['billet']));
  $billetsID = $req->fetch();

  return $billetsID;
}

// On récupère le nombre d'articles dans la table afin de pouvoir paginer sur le controller billet
function get_pagination()
{
  global $bdd;

  $req = $bdd->query('SELECT id FROM article');
  $pagination = $req->rowCount();

  return $pagination;
}
