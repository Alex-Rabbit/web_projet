<?php
/*
./app/vues/categories/index.php
variables disponibles
  - $categories: ARRAY(id, name, created_at)
*/
?>
<h4 class="widget_title">Category</h4>
<ul class="list cat-list">
  <?php foreach ($categories as $categorie): ?>
    <li>
        <a href="categories/<?php echo $categorie['id']; ?>/<?php echo slugify($categorie ['name']); ?>" class="d-flex">
            <p><?php echo $categorie['name']; ?></p>
            <p></p>
        </a>
    </li>
  <?php endforeach; ?>
</ul>
