<?php
function get_commentaires(){

  global $bdd;
  $offset = (int) $offset;
  $limit = (int) $limit;

  $commentaires = $bdd->prepare('SELECT auteur, message FROM commentaires WHERE id = ? ORDER BY :offset, :limit');
  $commentaires->bindParam(':offset', $offset, PDO::PARAM_INT);
  $commentaires->bindParam(':limit', $limit, PDO::PARAM_INT);
  $commentaires->execute(array($_GET['billet']));
  $commentaires->fetch();

  return $commentaires;
}
