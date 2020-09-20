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
    include_once '../app/modeles/postsModele.php';
    $posts = PostsModele\findAll($connexion);

  // Je charge la vue posts/index dans $content
  GLOBAL $title, $content;
  $title = "blog";
  ob_start();
    include '../app/vues/posts/index.php';
  $content = ob_get_clean();
}

/**
 * [showAction description]
 * @param  PDO    $connexion [description]
 * @param  int    $id        [description]
 * @return [type]            [description]
 */
function showAction(\PDO $connexion, int $id) {
  // Je demande le post au modèle
    include_once '../app/modeles/postsModele.php';
    $post = PostsModele\findOneByID($connexion, $id);

  // Je mets dans $author les infos de l'auteur du post que je demande au modèle authorModele
    include_once '../app/modeles/authorsModele.php';
    $author = \App\Modeles\AuthorsModele\findOneByID($connexion, $post['author_id']);

  // Je charge la vue show dans $content
  GLOBAL $title, $content;
  $title = $post['title'];
  ob_start();
    include '../app/vues/posts/show.php';
  $content = ob_get_clean();
}
