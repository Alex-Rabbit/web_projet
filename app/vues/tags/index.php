<?php
/*
./app/vues/tags/index.php
variables disponibles
  *tags: ARRAY(ARRAY(id, name))
 */
?>
<h4 class="widget_title">Tag Clouds</h4>
<ul class="list">
  <?php foreach ($tags as $tag): ?>
    <li>
      <a href="#">
        <p><?php echo $tag['name']; ?> (<?php echo $tag['nbrePosts']; ?>)</p>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
