<?php
/*
  ./app/vues/tags/indexByPostId.php

    Variables disponibles
    $tags = ARRAY(ARARY(id, nom))
 */

?>
<!-- Categories Widget -->


<ul class="list-inline tags">
  <?php foreach ($tags as $tag): ?>
    <li><a href="#" class="btn btn-default btn-xs"><?php echo $tag['nom']; ?></a></li>
  <?php endforeach; ?>
</ul>
