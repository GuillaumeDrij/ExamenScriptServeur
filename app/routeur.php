<?php
/*
  ./app/routeur.php
*/

// ROUTES DES PROJETS
// DETAILS D'UN PROJET
// PATTERN: ?postID=x /projets/id/slug.html
// CTRL: postsControleur
// ACTION: show
    if (isset($_GET['postID'])):
      include_once '../app/controleurs/postsControleur.php';
      \App\Controleurs\PostsControleur\showAction($connexion, $_GET['postID']);




// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: postsControleur
// ACTION: index
else:
        include_once '../app/controleurs/postsControleur.php';
        \App\Controleurs\PostsControleur\indexAction($connexion);
endif;
