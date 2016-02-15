<?php
function send_commentaires(){

  global $bdd;

  $req = $bdd->prepare('INSERT INTO commentaires (auteur, contenu, date_publication) VALUES (?, ?, NOW())');
  $req->execute(array($_POST['auteur'], $_POST['message']));

  return $req;
}
