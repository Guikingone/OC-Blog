<?php
include_once 'modele/get_articles.php';

$nbrArticlesPrPages = 5;
$pagination = get_pagination();
$pagesTotale = ceil($pagination / $nbrArticlesPrPages);

// On fait en sorte que l'utilisateur ne puisse pas saisir de numéro de page inexistant ou supérieur au nombre de page totales
if(isset($_GET['page']) && !empty($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <= $pagesTotale){
  $_GET['page'] = intval($_GET['page']);
  $pageCourante = $_GET['page'];
}else{
  $pageCourante = 1;
}

// On définit l'id à partir duquel on doit commencer la récupération des articles puis le maximum par page
$depart = ($pageCourante-1)*$nbrArticlesPrPages;
$billets = get_articles($depart, $nbrArticlesPrPages);

foreach($billets as $key => $billet){
    $billets[$key]['titre'] = htmlspecialchars($billet['titre']);
    $billets[$key]['contenu'] = nl2br($billet['contenu']);
}

include_once 'vue/blog/index.php';
