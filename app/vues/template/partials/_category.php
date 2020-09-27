<aside class="single_sidebar_widget post_category_widget">
  <?php

    include_once '../app/controleurs/categoriesControleur.php';
    \App\Controleurs\CategoriesControleur\indexAction($connexion, ['orderBy' => 'name']);

  ?>
</aside>
