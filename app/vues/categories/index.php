<?php
/*
./app/vues/categories/index.php
variables disponibles
  - $categories: ARRAY(id, name, created_at)
*/
?>
<h4 class="widget_title">Category</h4>
<ul class="list cat-list">
  <?php foreach ($categories as $category): ?>
    <li>
        <a href="categories/<?php echo $category['id']; ?>/<?php echo $category['slug']; ?>" class="d-flex">
            <p><?php echo $category['name']; ?></p>
            <p></p>
        </a>
    </li>
  <?php endforeach; ?>
</ul>
