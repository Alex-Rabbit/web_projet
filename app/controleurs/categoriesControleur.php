<?php
/*
./app/controleurs/categoriesControleur.php
*/

namespace App\Controleurs\CategoriesControleur;
use \App\Modeles\CategoriesModele;

function showAction(\PDO $connexion, int $id) {
  // Je demande la categorie au modèle
    include_once '../app/modeles/categoriesModele.php';
    $category = CategoriesModele\findOneByID($connexion, $id);

    include_once '..app/modeles/postsModele.php';
    $posts = \App\Modeles\Posts\findAllByCategorie($connexion, $id);

  // Je charge la vue show dans $content
  GLOBAL $title, $content;
  $title = $category['title'];
  ob_start();
    include '../app/vues/categories/show.php';
  $content = ob_get_clean();
}
