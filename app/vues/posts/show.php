<?php
/*
  ./app/vues/posts/index.php

    Variables disponibles
    $post = ARRAY(id, titre, texte, dateCreation, image, creatif)
 */

?>
<!-- Title -->
<h1 class="mt-4"><?php echo $post['titre']; ?> | <a href="projets/delete/<?php echo $post['id']; ?>/<?php echo \Noyau\Fonctions\slugify ($post['titre']); ?>">Supprimer le projet</a></h1>

<p class="lead">
  par
  <a href="artiste_details.html"><?php echo $post['creatif']; ?></a> le 01-01-2017
</p>

<hr>

<!-- NOM DU PROJET -->

<div class="row">
  <div class="col-md-6">
    <a href="#">
      <img class="img-fluid rounded mb-3 mb-md-0" src="assets/images/<?php echo $post['image']; ?>" alt="">
    </a>
  </div>
  <div class="col-md-6">
    <p class="lead"><?php echo $post['texte']; ?></p>
    <hr/>
    <p><?php echo $post['texte']; ?></p>
    <hr/>

<!-- Les TAGS du projet -->
    <?php
    include_once '../app/controleurs/tagsControleur.php';
    \App\Controleurs\TagsControleur\indexByPostIdAction($connexion, $post['id']);
     ?>

  </div>

</div>
<hr>
