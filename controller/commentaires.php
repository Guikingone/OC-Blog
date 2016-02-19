<?php
include_once 'modele/get_commentaires.php';
include_once 'modele/get_articles.php';

$commentaires = get_commentaires();
$billets = get_articles_by_id();

foreach($commentaires as $key => $commentaire){
  $commentaires[$key]['auteur'] = htmlspecialchars($commentaire['auteur']);
  $commentaires[$key]['contenu'] = htmlspecialchars($commentaire['contenu']);
}

include_once 'vue/blog/commentaires.php';
