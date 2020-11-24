<?php
/*
./app/routeurs/posts.php
      il existe un $_GET['posts']
*/
use \App\Controleurs\PostsControleur;
include_once '../app/controleurs/postsControleur.php';

switch ($_GET['posts']){
  case 'show':
  // DETAILS D'UN PROJET
  // PATTERN: /projets/id/slug.html
  // VERS: index.php?posts=show&id=x
  // ACTION: show
   PostsControleur\showAction($connexion, $_GET['id']);
  break;


  /* Suppression d'un projet */
    case 'delete':
    PostsControleur\deleteAction($connexion, $_GET['id']);
    break;


  /* Route par defaut
    default:
    PostsControleur\indexAction($connexion);
    break; */


}
