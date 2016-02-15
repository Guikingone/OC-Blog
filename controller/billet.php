<?php
include_once 'modele/get_articles.php';
$billets = get_articles(0, 25);

foreach($billets as $key => $billet){
    $billets[$key]['titre'] = htmlspecialchars($billet['titre']);
    $billets[$key]['contenu'] = nl2br($billet['contenu']);
}

include_once 'vue/blog/index.php';
