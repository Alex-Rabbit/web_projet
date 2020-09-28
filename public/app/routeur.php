<?php
/*
./app/routeur.php
Routeur principal
*/

if (isset($_GET['categories'])):
  include '../app/routeurs/categoriesRouteur.php';

elseif (isset($_GET['posts'])):
  include '../app/routeurs/postsRouteur.php';

elseif (isset($_GET['tags'])):
  include '../app/routeurs/tagsRouteur.php';

elseif (isset($_GET['users'])):
  include '../app/routeurs/usersRouteur.php';

// Page contact
// PATTERN : ?contact
// CTRL : -
// ACTION : -
elseif (isset($_GET['contact'])):
  $title = "contact";
  ob_start();
    include_once '../app/vues/template/partials/_contcat.php';
  $content = ob_get_clean();

// Route par defaut
// PATTERN : /
// CTRL : postsControleur
// ACTION : index
else:
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\PostsControleur\indexAction($connexion, [
    'orderBy'   => 'created_at',
    'orderSens' => 'DESC',
    'limit' => 10
  ]);

endif;
