<?php
/*
 ./app/routeurs/usersRouteur.php
 */

use \App\Controleurs\UsersControleur;
include_once '../app/controleurs/usersControleur.php';

switch ($_GET['users']):
  case 'loginForm':
    // Formulaire de connexion au backoffice
    // PATTERN : ?users=login
    // CTRL : usersControleur
    // ACTION : loginForm
    UsersControleur\loginFormAction();
    break;
  case 'loginCheck':
    // Formulaire de connexion au backoffice
    // PATTERN : ?users=login
    // CTRL : usersControleur
    // ACTION : loginForm
    UsersControleur\loginCheckAction($connexion);
    break;
  default:
  // Je charge un 404
    break;
endswitch;
