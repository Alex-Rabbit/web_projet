<aside class="single_sidebar_widget tag_cloud_widget">
  <?php
    include_once '../app/modeles/tagsModele.php';
    $tags = \App\Modeles\TagsModele\findAll($connexion);
    include '../app/vues/tags/index.php';
  ?>
</aside>
