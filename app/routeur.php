<?php
/*
./app/routeur.php
Routeur principal
*/

// Page contact
// PATTERN : ?contact
// CTRL : -
// ACTION : -
if (isset($_GET['contact'])):
  $title = "contact";
  ob_start();
    include_once '../app/vues/template/partials/_contcat.php';
  $content = ob_get_clean();

// Détails d'une catégorie
// PATTERN : /index.php?categorieId=x
// CTRL : categoriesControleur
// ACTION : show
elseif (isset($_GET['categorieId'])):
  include_once '../app/controleurs/categoriesControleur.php';
  \App\Controleurs\CategoriesControleur\showAction($connexion, $_GET['categorieId']);

// Détails d'un post
// PATTERN : /index.php?postId=x
// CTRL : postsControleur
// ACTION : show
elseif (isset($_GET['postId'])):
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\PostsControleur\showAction($connexion, $_GET['postId']);

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
