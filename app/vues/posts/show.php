<?php
/*
./app/vues/posts/show.php
variables disponibles
  *post: ARRAY(id, title, content, created_at, image, author_id, categorie_id))
 */
?>
<div class="single-post">
   <div class="feature-img">
      <img class="img-fluid" src="assets/img/blog/single_blog_1.png" alt="">
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
<div class="blog-author">
   <div class="media align-items-center">
      <img src="assets/img/blog/author.png" alt="">
      <div class="media-body">
        <!-- AUTHOR DETAIL -->
         <a href="#">
            <h4><?php echo $post['author_id']; ?></h4>
         </a>
         <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
            our dominion twon Second divided from</p>
      </div>
   </div>
</div>
