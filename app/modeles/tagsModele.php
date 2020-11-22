<?php
/*
  ./app/modeles/postsModele.php
*/
  namespace App\Modeles\TagsModele;


  function findAllByPostId(\PDO $connexion, int $postId) :array{
    $sql = "SELECT *
            FROM tags t
            JOIN projets_has_tags pht ON t.id = pht.tag
            WHERE pht.projet = :postId
            ORDER BY t.nom ASC;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':postId', $postId, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }
