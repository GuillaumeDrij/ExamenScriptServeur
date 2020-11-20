<?php
/*
  ./app/modeles/postsModele.php
*/
  namespace App\Modeles\PostsModele;

/**
 * [findAll description]
 * @param  PDO   $connexion [description]
 * @return array            [description]
 */

  function findAll(\PDO $connexion) :array{
    $sql = "SELECT *
            FROM projets
            ORDER BY dateCreation DESC
            LIMIT 10;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }
/*
  function findOneById(\PDO $connexion, int $id) {
    $sql = "SELECT *
            FROM posts
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
  }
*/
