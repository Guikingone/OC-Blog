<?php

include_once 'modele/Connexion_BDD.php';

if(!isset($_GET['section']) OR $_GET['section'] === 'admin')
{
  include_once 'controller/admin.php';
}
