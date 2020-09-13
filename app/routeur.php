<?php
/*
./app/routeur.php
Routeur principal
*/

// Route par defaut
// PATTERN : /
// CTRL : postsControleur
// ACTION : index

include_once '../app/controleurs/postsControleur.php';
\App\Controleurs\PostsControleur\indexAction($connexion);
