<aside class="single_sidebar_widget post_category_widget">
  <?php
    include '../app/modeles/categoriesModele.php';
    $categories = \App\Modeles\CategoriesModele\findAll($connexion);
    include '../app/vues/categories/index.php';
  ?>
</aside>
