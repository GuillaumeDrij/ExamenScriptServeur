<?php
/*
  ./app/vues/tags/indexTags.php (Les tags de droite non lié directement aux projets)

    Variables disponibles
    $tags = ARRAY(ARARY(id, nom))
 */

?>
<ul class="list-unstyled mb-0">
  <?php foreach ($tags as $tag): ?>
    <li>
      <a href="#"><?php echo $tag ['nom']; ?></a> | <a href="">Modifier</a>
    </li>
  <?php endforeach; ?>
</ul>
