<?php
/*
  ./app/controleurs/postsControleur.php
 */
  namespace App\Controleurs\PostsControleur;
  use \App\Modeles\PostsModele;

  function indexAction(\PDO $connexion){
    // 1. Demande la liste des posts au modèle
    //    et on la met dans $posts
      include_once '../app/modeles/postsModele.php';
      $posts = PostsModele\findAll($connexion);

    // 2. On charge la vue index dans $content
      GLOBAL $content;
      ob_start();
        include '../app/vues/posts/index.php';
      $content = ob_get_clean();
  }

  function showAction(\PDO $connexion, int $id) {
    // Je demande les infos du post au modèle et je les mets dans $post
      include_once '../app/modeles/postsModele.php';
      $post = PostsModele\findOneById($connexion, $id);

    // Je charge la vue dans $content
      GLOBAL $content;
      ob_start();
        include '../app/vues/posts/show.php';
      $content = ob_get_clean();
  }
