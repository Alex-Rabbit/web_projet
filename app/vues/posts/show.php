<?php
/*
./app/vues/posts/show.php
variables disponibles
  *post: ARRAY(id, title, content, created_at, image, author_id, categorie_id))
  *author: ARRAY(id, firstname, lastname, biography, avatar, created_at)
 */
?>
<div class="single-post">
   <div class="feature-img">
      <img class="img-fluid" src="image/<?php echo $post['image']; ?>" alt="">
   </div>
   <div class="blog_details">
      <h2><?php echo $post['title']; ?></h2>
      <!-- LISTE DES TAGS -->
          <?php
            include_once '../app/controleurs/tagsControleur.php';
            \App\Controleurs\TagsControleur\indexByPostIdAction($connexion, $post['id']);
          ?>
      <p class="excert">
         <?php echo $post['content']; ?>
      </p>
   </div>
</div>
<!-- AUTHOR DETAIL -->
<?php
  include '../app/vues/authors/show.php';
?>
