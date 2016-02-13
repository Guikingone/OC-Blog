<?php
function get_commentaires(){

  global $bdd;
  $offset = (int) $offset;
  $limit = (int) $limit;

  $billet = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_publication
    , \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM article WHERE id = ?');
  $billet->execute(array($_GET['billet']));
  $blt = $billet->fetch();

  $commentaires = $bdd->prepare('SELECT auteur, message FROM commentaires ORDER BY :offset, :limit');
  $commentaires->bindParam(':offset', $offset, PDO::PARAM_INT);
  $commentaires->bindParam(':limit', $limit, PDO::PARAM_INT);
  $commentaires->execute(array($_GET['billet']));
  $commentaires->fetchAll();

  return $blt;
  return $commentaires;
}
