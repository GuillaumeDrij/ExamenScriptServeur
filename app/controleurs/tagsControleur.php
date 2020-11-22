<?php
/*
  ./app/controleurs/tagsControleur.php
*/
namespace App\Controleurs\TagsControleur;
use \App\Modeles\TagsModele;



function indexByPostIdAction(\PDO $connexion, int $postId) {
  // 1. Demande la liste des tags du post au modèle
  //    et on la met dans $posts
    include_once '../app/modeles/tagsModele.php';
    $tags = TagsModele\findAllByPostId($connexion, $postId);

  // Je charge la vue tags/indexByPostId dans $content
    include '../app/vues/tags/indexByPostId.php';
}
