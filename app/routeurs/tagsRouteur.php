<?php
/*
 ./app/routeurs/tagsRouteur.php
 */

use \App\Controleurs\TagsControleur;
include_once '../app/controleurs/tagsControleur.php';

switch ($_GET['tags']):
  case 'show':
  // Détails d'un tag
  // PATTERN : /index.php?tags=show&id=x
  // CTRL : tagsControleur
  // ACTION : show
  TagsControleur\showAction($connexion, $_GET['id']);
    break;
endswitch;
