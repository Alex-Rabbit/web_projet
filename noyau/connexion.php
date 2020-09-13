<?php
/*
    ./noyau/connexion.php
  Creation d'une instance PDO $connexion
*/

// Paramêtre de connexion.
$dsn = "mysql:host=".HOSTNAME.";dbname=".DBNAME;
$param = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

// Création de l'objet PDO $connexion
try {
  $connexion = new PDO($dsn,USERNAME,USERPWD,$param);
}
catch (PDOException $e) {
  echo "Erreur !:" . $e->getMessage() . "<br />";
  die();
}
