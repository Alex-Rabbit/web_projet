<?php
/*
./app/controleurs/tagsControleur.php
*/

namespace App\Controleurs\TagsControleur;
use \App\Modeles\TagsModele;

/**
 * [indexAction description]
 * @param  PDO    $connexion [description]
 */
function indexByPostIdAction(\PDO $connexion, int $postId) {
  // Je mets dans $tags la liste des tags du post que je demande au modele
    include_once '../app/modeles/tagsModele.php';
    $tags = TagsModele\findAllByPostId($connexion, $postId);

  // Je charge la vue tags/indexByPostId dans $content
    include '../app/vues/tags/indexByPostId.php';
}

function showAction(\PDO $connexion, int $id) {
  //je demande le tag au modele
  include_once '../app/modeles/tagsModele.php';
  $tag = TagsModele\findOneById($connecion, $id);

  include_once '../app/modeles/postsModele.php';
  $posts = \App\Modeles\postsModele\findAll($connexion, [
    'categorie' => $id,
    'orderBy'   => 'created_at',
    'orderSens' => 'DESC'
  ]);

  // Je charge la vue show dans $content
  GLOBAL $title, $content;
  $title = $tag['name'];
  ob_start();
    include '../app/vues/tags/show.php';
  $content = ob_get_clean();
}
