<?php
/*
  ./app/vues/posts/index.php

    Variables disponibles
    $posts= ARRAY(ARRAY(id, title, texte, dateCreation, image, creatif))
 */

?>
<!-- Title -->
<h1 class="mt-4">Les projets <small>Design capill'Hair</small></h1>

<hr>

<!-- LISTE DES POSTS -->
<?php foreach ($posts as $post): ?>
<div class="row">
  <div class="col-md-4">
    <a href="#">
      <img class="img-fluid rounded mb-3 mb-md-0" src="assets/images/<?php echo $post['image']; ?>" alt="coiffure">
    </a>
  </div>
  <div class="col-md-8">
    <h3><?php echo $post['titre']; ?></h3>
    <p class="lead">
      par
      <a href="artiste_details.html"><?php echo $post['creatif']; ?></a> le <?php echo date('d-m-Y', strtotime($post['dateCreation'])); ?>

    </p>
    <p><?php echo substr($post['texte'], 0, 100); ?></p>
    <a class="btn btn-primary" href="projet_details.html">View Project</a>
    <hr/>
    <ul class="list-inline tags">
      <li><a href="#" class="btn btn-default btn-xs">Vintage</a></li>
      <li><a href="#" class="btn btn-default btn-xs">Football</a></li>
    </ul>
  </div>
</div>
<hr>
<?php endforeach; ?>
