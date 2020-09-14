<?php
/*
./app/routeur.php
Routeur principal
*/

// Route d'un post
// PATTERN : /index.php?postId=x
// CTRL : postsControleur
// ACTION : show
if (isset($_GET['postId'])):
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\PostsControleur\showAction($connexion, $_GET['postId']);

// Route par defaut
// PATTERN : /
// CTRL : postsControleur
// ACTION : index
else:
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\PostsControleur\indexAction($connexion);

endif;
