<?php
include_once 'modele/get_articles.php';
$billets = get_articles(0, 25);
$pagination = get_pagination();
$nbrArticlesPrPages = 5;
$nbPages = ceil($pagination/$nbrArticlesPrPages);

foreach($billets as $key => $billet){
    $billets[$key]['titre'] = htmlspecialchars($billet['titre']);
    $billets[$key]['contenu'] = nl2br($billet['contenu']);
}

include_once 'vue/blog/index.php';
