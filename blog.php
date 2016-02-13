<?php

include_once 'modele/Connexion_BDD.php';

if(!isset($_GET['section']) OR $_GET['section'] === 'index')
{
  include_once ('controller/billet.php');
}
