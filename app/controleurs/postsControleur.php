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
function indexAction(\PDO $connexion, array $params = []) {
  // Je mets dans $posts les 10 derniers posts que je demande au modele
    include_once '../app/modeles/postsModele.php';
    $posts = PostsModele\findAll($connexion, $params);

  // Je charge la vue posts/index dans $content
  GLOBAL $title, $content;
  $title = TITRE_POSTS_INDEX;
  ob_start();
    include '../app/vues/posts/index.php';
  $content = ob_get_clean();
}

function showAction(\PDO $connexion, $id) {
  // Je demande le post au modele
    include_once '../app/modeles/postsModele.php';
    $post = PostsModele\findOneById($connexion, $id);

  // Je charge la vue show dans $content
  GLOBAL $title, $content;
  $title = $post['title'];
  ob_start();
    include '../app/vues/posts/show.php';
  $content = ob_get_clean();
}
/*
function searchAction(\PDO $connexion, string $search) {
  // Je demande la liste des posts au modeles
  include_once '../app/modeles/postsModele.php';
  $posts = PostsModele\findAllBySearch($connexion, $search);

  // Je charge la vue search dans $content
  GLOBAL $title, $content;
  $title = $post['title'];
  ob_start();
    include '../app/vues/posts/show.php';
  $content = ob_get_clean();
}
*/
