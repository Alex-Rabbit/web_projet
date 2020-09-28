<?php
/*
./app/modeles/postsModele.php
Modele des posts
*/

namespace App\Modeles\PostsModele;

/**
 * [findAll description]
 * @param  PDO    $connexion [description]
 * @param  array  $params    [description]
 * @return [type]            [description]
 */
function findAll(\PDO $connexion, array $params = []) {
  $params_default = [
    'categorie' => null,
    'orderBy'   => 'id',
    'orderSens' => 'ASC',
    'limit'     => null
  ];
  $params = array_merge($params_default, $params);

  $orderBY   = htmlentities($params['orderBy']);
  $orderSens = htmlentities($params['orderSens']);

  $sql = "SELECT *
          FROM posts ";

  $sql .= ($params['categorie'] !== null)?" WHERE categorie_id = :categorie ":' ';
  $sql .= " ORDER BY $orderBY $orderSens ";
  $sql .= ($params['limit'] !== null)?" LIMIT :limit ;":';';

  $rs = $connexion->prepare($sql);
  if ($params['categorie'] !== null):
    $rs->bindValue(':categorie', $params['categorie'], \PDO::PARAM_INT);
  endif;
  if ($params['limit'] !== null):
    $rs->bindValue(':limit', $params['limit'], \PDO::PARAM_INT);
  endif;
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function findOneById(\PDO $connexion, int $id){
  $sql = "SELECT *
          FROM posts
          JOIN authors ON author_id = authors.id
          WHERE posts.id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindvalue(':id', $id, \PDO::PARAM_STR);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}
