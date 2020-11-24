<?php
/*
  ./app/vues/posts/index.php

    Variables disponibles
    $posts= ARRAY(ARRAY(id, titre, texte, dateCreation, image, creatif))
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
    <a class="btn btn-primary" href="projets/<?php echo $post['id']; ?>/<?php echo \Noyau\Fonctions\slugify ($post['titre']); ?>">View Project</a>
    <hr/>

  <!-- Tags des projets -->

    <ul class="list-inline tags">

      <?php
      include_once '../app/controleurs/tagsControleur.php';
      \App\Controleurs\TagsControleur\indexByPostIdAction($connexion, $post['id']);
       ?>

    </ul>
  </div>


</div>
<hr>
<?php endforeach; ?>
