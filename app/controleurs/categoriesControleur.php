<?php
/*
./app/controleurs/postsControleur.php
*/

namespace App\Controleurs\CategoriesControleur;
use \App\Modeles\CategoriesModele;

/**
 * [indexAction description]
 * @param  PDO    $connexion [description]
 */
function indexAction(\PDO $connexion, array $params = []) {
  // Je demande la liste des categories au modele
    include_once '../app/modeles/categoriesModele.php';
    $categories = CategoriesModele\findAll($connexion, $params);

  // Je charge directement la vue index
    include '../app/vues/categories/index.php';
}

function showAction(\PDO $connexion, $id) {
  // Je demande la categorie au modele
    include_once '../app/modeles/categoriesModele.php';
    $categorie = CategoriesModele\findOneById($connexion, $id);

    include_once '../app/modeles/postsModele.php';
    $posts = \App\Modeles\postsModele\findAll($connexion, [
      'categorie' => $id,
      'orderBy'   => 'created_at',
      'orderSens' => 'DESC'
    ]);

  // Je charge la vue show dans $content
  GLOBAL $title, $content;
  $title = $categorie['name'];
  ob_start();
    include '../app/vues/categories/show.php';
  $content = ob_get_clean();
}
