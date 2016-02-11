<?php
include 'Connexion_BDD.php';

$req = $bdd->prepare('INSERT INTO commentaires (auteur, contenu) VALUES (?, ?)');
$req->execute(array($_POST['auteur'], $_POST['message']));

header('Location: ../vue/blog/commentaires.php');
