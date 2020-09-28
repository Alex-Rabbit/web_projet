<?php
/*
 ./app/routeurs/categoriesRouteur.php
 */

use \App\Controleurs\CategoriesControleur;
include_once '../app/controleurs/categoriesControleur.php';

switch ($_GET['categories']):
  case 'show':
  // Détails d'une catégorie
  // PATTERN : /index.php?categories=show&id=x
  // CTRL : categoriesControleur
  // ACTION : show
  CategoriesControleur\showAction($connexion, $_GET['id']);
    break;
endswitch;
