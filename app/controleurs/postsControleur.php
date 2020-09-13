<?php
/*
./app/controleurs/postsControleur.php
*/

namespace App\Controleurs\PostsControleur;
use \App\Modeles\PostsModele;

/**
 * [indexAction description]
 * @param  PDO    $connexion [description]
 */
function indexAction(\PDO $connexion) {
  // Je mets dans $posts les 10 derniers posts que je demande au modele
    include '../app/modeles/postsModele.php';
    $posts = PostsModele\findAll($connexion);

  // Je charge la vue posts/index dans $content
  GLOBAL $title, $content;
  $title = "blog";
  ob_start();
    include '../app/vues/posts/index.php';
  $content = ob_get_clean();
}
