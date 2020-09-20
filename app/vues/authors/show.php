<?php
/*
./app/vues/authors/show.php
variables disponibles
  *author: ARRAY(id, firstname, lastname, biography, avatar, created_at)
 */
 ?>
 <div class="blog-author">
    <div class="media align-items-center">
       <img src="avatars/<?php echo $author['avatar']; ?>" alt="<?php echo $author['lastname']; ?> <?php echo $author['firstname']; ?>">
       <div class="media-body">
          <a href="#">
             <h4><?php echo $author['lastname']; ?>
                 <?php echo $author['firstname']; ?>
             </h4>
          </a>
          <p><?php echo $author['biography']; ?></p>
       </div>
    </div>
 </div>
