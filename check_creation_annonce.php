<?php

extract($_POST);

$tab=array();
$tabValide = true;
//parse_str($_POST,$tab);

$tab['titre_annonce'] = htmlspecialchars($titre_annonce);
$tab['description_courte'] = htmlspecialchars($description_courte);
$tab['description_longue'] = htmlspecialchars($description_longue);
$tab['description_courte'] = htmlspecialchars($_POST['description_courte']);
$tab['description_longue'] = htmlspecialchars($description_longue);
$tab['select_categorie'] = $select_categorie;
$tab['upload_photo'] = $upload_photo;
$tab['addresse_annonce'] = $addresse_annonce;
$tab['ville_annonce'] = $ville_annonce;
$tab['cp_annonce'] = $cp_annonce;
$tab['pays_annonce'] = $pays_annonce;*/


$tab['validation'] = 'ok';

echo json_encode($tab);


function valideTailleStr($str, $taille){
  if (!is_numeric($taille)) {

    return false;
  }
}
