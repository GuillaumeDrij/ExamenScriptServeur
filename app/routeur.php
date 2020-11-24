<?php
/*
  ./app/routeur.php
*/


if (isset($_GET['posts'])):
    // ROUTES DES PROJETS
    // DETAILS D'UN PROJET
    // PATTERN: ?postID=x /projets/id/slug.html
    // CTRL: postsControleur
    // ACTION: show
  include_once '../app/routeurs/postsRouteur.php';
//  \App\Controleurs\PostsControleur\showAction($connexion, $id);




else:
    // ROUTE PAR DEFAUT
    // PATTERN: /
    // CTRL: postsControleur
    // ACTION: index
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\PostsControleur\indexAction($connexion);
endif;
