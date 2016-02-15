<?php
include_once 'modele/get_commentaires.php';
$commentaires = get_commentaires(0, 10);

foreach($commentaires as $key => $commentaire){
  $commentaires[$key]['auteur'] = htmlspecialchars($commentaire['auteur']);
  $commentaires[$key]['contenu'] = htmlspecialchars($commentaire['contenu']);
}

include_once 'vue/blog/commentaires.php';
