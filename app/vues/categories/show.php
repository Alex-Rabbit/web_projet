<?php
/*
./app/vues/categories/show.php
variables disponibles
  - $categorie: ARRAY(id, name, created_at)
*/
?>
<div class="blog_left_sidebar">

  <!-- Listes des posts -->
  <h1>Poste de la catégorie : <?php echo $categorie['name'] ?></h1>
  <?php foreach ($posts as $post):
    $date = strtotime($post['created_at']);
  ?>
    <article class="blog_item">
        <div class="blog_item_img">
            <img class="card-img rounded-0" src="image/<?php echo $post['image']; ?>" alt="">
            <a href="#" class="blog_item_date">
                <h3><?php echo date('d', $date); ?></h3>
                <p><?php echo date('M', $date); ?></p>
            </a>
        </div>

        <div class="blog_details">
            <a class="d-inline-block" href="posts/<?php echo $post['id']; ?>/<?php echo slugify($post['title']); ?>">
                <h2><?php echo $post['title']; ?></h2>
            </a>
            <p><?php echo $post['content']; ?>.</p>
            <?php
              include_once '../app/controleurs/tagsControleur.php';
              \App\Controleurs\TagsControleur\indexByPostIdAction($connexion, $post['id']);
            ?>
        </div>
    </article>
  <?php endforeach; ?>

    <nav class="blog-pagination justify-content-center d-flex">
        <ul class="pagination">
            <li class="page-item">
                <a href="#" class="page-link" style="width: auto; padding: 0 1em;">More posts</a>
            </li>
        </ul>
    </nav>
</div>
