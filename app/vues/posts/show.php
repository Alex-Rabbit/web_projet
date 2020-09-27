<?php
/*
./app/vues/posts/show.php
variables disponibles
  - $post: ARRAY(id, title, content, created_at, image, author_id, categorie_id, auteur))
*/
?>
<div class="single-post">
   <div class="feature-img">
      <img class="img-fluid" src="assets/img/blog/<?php echo $post['image']; ?>" alt="">
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
<div class="blog-author">
   <div class="media align-items-center">
      <img src="assets/img/blog/<?php echo $post['avatar']; ?>" alt="<?php echo $post['lastname']; ?> <?php echo $post['firstname']; ?>">
      <div class="media-body">
         <a href="#">
            <h4><?php echo $post['lastname']; ?>
                <?php echo $post['firstname']; ?>
            </h4>
         </a>
         <p><?php echo $post['biography']; ?></p>
      </div>
   </div>
</div>
