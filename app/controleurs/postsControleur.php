<?php
/*
  ./app/controleurs/postsControleur.php
*/
namespace App\Controleurs\PostsControleur;
use \App\Modeles\PostsModele;
/**
 * [indexAction description]
 * @param  PDO    $connexion [description]
 * @return [type]            [description]
 */

function indexAction(\PDO $connexion){
  // 1. Demande la liste des posts au modèle
  //    et on la met dans $posts
    include_once '../app/modeles/postsModele.php';
    $posts = PostsModele\findAll($connexion);

  // Je charge la vue posts/index dans $content
  GLOBAL $title, $content;
  $title = "Design capill'Hair";
  ob_start();
    include '../app/vues/posts/index.php';
  $content = ob_get_clean();
}

function showAction(\PDO $connexion, int $id) {
    // Je demande les infos du post au modèle et je les mets dans $post
      include_once '../app/modeles/postsModele.php';
      $post = PostsModele\findOneById($connexion, $id);

    // Je charge la vue dans $content
      GLOBAL $content, $title;
      $title = $post['titre'];
      ob_start();
        include '../app/vues/posts/show.php';
      $content = ob_get_clean();
  }
