<?php
function get_commentaires(){

  global $bdd;
  $offset = (int) $offset;
  $limit = (int) $limit;

  $req = $bdd->prepare('SELECT auteur, message FROM commentaires ORDER BY :offset, :limit');
  $req->bindParam(':offset', $offset, PDO::PARAM_INT);
  $req->bindParam(':limit', $limit, PDO::PARAM_INT);
  $req->execute();
  $commentaires = $req->fetchAll();

  return $commentaires;
}
