<?php
include_once 'modele/get_articles.php';
include_once 'modele/pagination.php' ;

$billets = get_articles(0, 5);
$pagination = pagination();

foreach($billets as $key => $billet){
  $billets[$key]['titre'] = htmlspecialchars($billet['titre']);
  $billets[$key]['contenu'] = htmlspecialchars($billet['contenu']);
}

include_once 'vue/blog/index.php';
