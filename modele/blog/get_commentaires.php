<?php
function get_commentaires()
{
  global $bdd;

  $req = $bdd->prepare('SELECT auteur, contenu, DATE_FORMAT(date_publication
  , \'%d/%m/%Y à %Hh%imin%ss\') AS date_publication FROM commentaires WHERE id = ?');
  $req->execute(array($_GET['billet']));
  $commentaires = $req->fetchAll();

  return $commentaires;
}

function send_commentaires($name, $email, $message)
{
  global $bdd;

  $commentaire = [
    'name' => $name,
    'email' => $email,
    'message' => $message,
    'article_id' => $_GET['billet']
  ];

  $req = $bdd->prepare('INSERT INTO commentaires (auteur, contenu, date_publication, email, article_id)
                        VALUES (:name, :message, NOW(), :email, :article_id)');
  $commentaires = $req->execute($commentaire);
}
