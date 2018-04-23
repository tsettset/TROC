<?php

$tab=array();
extract($_POST);
$tabValide = true; // bool pour autoriser l'envoi de la requete INSERT INTO

$tab['message'] = ''; // message de retour pour l'utilisateur
$tab['message'] = 'Creation de l\'annonce en cours';

//---------------- Titre annonce ------------
$titre_annonce = htmlspecialchars($titre_annonce);
$tab['titre_annonce'] = $titre_annonce;
if (strlen($titre_annonce) > 255){
  $tab['message'] = 'Titre de l\'annonce trop long <br>';
  $tabValide = false;
}

//---------------- Description courte ------------
$description_courte = htmlspecialchars($description_courte);
$tab['description_courte'] = $description_courte;
if (strlen($description_courte) > 2){
  $tab['message'] .= 'Description courte de l\'annonce trop longue <br>';
  $tabValide = false;
}

//---------------- Description longue ------------
/*$tab['description_longue'] = htmlspecialchars($description_longue);
$tab['select_categorie'] = $select_categorie;
$tab['upload_photo'] = $upload_photo;
$tab['addresse_annonce'] = $addresse_annonce;
$tab['ville_annonce'] = $ville_annonce;
$tab['cp_annonce'] = $cp_annonce;
$tab['pays_annonce'] = $pays_annonce;*/

if ($tabValide){
  $tab['validation'] = 'ok';
} else {
  $tab['validation'] = 'err';
}


echo json_encode($tab);
