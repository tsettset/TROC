<?php
function getListeCategories($tagOuvrant,$tagFermant){
  global $bdd;
  $categoriesHTML = '';
  $req_categories = $bdd->query("SELECT titre FROM categorie");
  $categories = $req_categories->fetchAll(PDO::FETCH_OBJ);
  //debug($categories);
  foreach ($categories as $value) {
    $categoriesHTML .= $tagOuvrant.$value->titre.$tagFermant;
  }
  return $categoriesHTML;
}
