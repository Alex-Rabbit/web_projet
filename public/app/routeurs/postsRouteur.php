<?php
/*
 ./app/routeurs/postsRouteur.php
 */

use \App\Controleurs\PostsControleur;
include_once '../app/controleurs/postsControleur.php';

switch ($_GET['posts']):
  case 'show':
  // Détails d'un post
  // PATTERN : /index.php?posts=show&id=x
  // CTRL : postsControleur
  // ACTION : show
    PostsControleur\showAction($connexion, $_GET['id']);
    break;
  case 'search':
  // recherche d'un post
  // PATTERN : /index.php?posts=show&id=x
  // CTRL : postsControleur
  // ACTION : search
    PostsControleur\searchAction($connexion, $_GET['search']);
    break;
endswitch;
