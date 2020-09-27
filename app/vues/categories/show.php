<?php
/*
./app/vues/categories/show.php
variables disponibles
  - $categorie: ARRAY(id, name, created_at)
  - $Posts : ARRAY(ARRAY(Id , title , content, created_at, image, author_id, categorie_id ))
*/
?>
<div class="blog_left_sidebar">

  <!-- Listes des posts -->
  <h1>Poste de la catégorie : <?php echo $categorie['name']; ?></h1>

  <?php include '../app/vues/posts/list.php'; ?>

</div>
