<?php
/*
./app/modeles/categoriesModele.php
Modele des categories
*/

namespace App\Modeles\CategoriesModele;

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
          FROM categories
          ORDER BY $orderBY $orderSens ";
  $sql .= ($params['limit'] !== null)?" LIMIT :limit ;":';';

  $rs = $connexion->prepare($sql);
  if ($params['limit'] !== null):
    $rs->bindValue(':limit', $params['limit'], \PDO::PARAM_INT);
  endif;
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function findOneById(\PDO $connexion, int $id){
  $sql = "SELECT *
          FROM categories
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindvalue(':id', $id, \PDO::PARAM_STR);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}
