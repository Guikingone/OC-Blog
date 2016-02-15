<?php
function get_pagination(){

  global $bdd;

  $req = $bdd->exec('SELECT COUNT(*) AS nb_article FROM article');
  $req->fetch();

}
