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

  <?php include '../app/vues/posts/list.php'; ?>

</div>
