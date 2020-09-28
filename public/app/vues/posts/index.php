<?php
/*
./app/vues/posts/index.php
variables disponibles
  - $posts: ARRAY(ARRAY(id, title, content, created_at, image, author_id, categorie_id))
 */
?>
    <div class="blog_left_sidebar">

      <!-- Listes des posts -->
      <?php include '../app/vues/posts/list.php'; ?>

        <nav class="blog-pagination justify-content-center d-flex">
            <ul class="pagination">
                <li class="page-item">
                    <a href="#" class="page-link" style="width: auto; padding: 0 1em;">More posts</a>
                </li>
            </ul>
        </nav>
    </div>
