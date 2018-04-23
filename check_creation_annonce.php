<?php

$tab=array();
$tab['fullPost'] = json_encode($_POST);
extract($_POST);
$tabValide = true; // bool pour autoriser l'envoi de la requete INSERT INTO

$tab['message'] = ''; // message de retour pour l'utilisateur

//---------------- Titre annonce ------------
$titre_annonce = htmlspecialchars($titre_annonce);
$tab['titre_annonce'] = $titre_annonce;
if (strlen($titre_annonce) > 255){
  $tab['message'] .= 'Titre de l\'annonce trop long <br>';
  $tabValide = false;
}
elseif (strlen($titre_annonce) < 1){
  $tab['message'] .= 'Le titre de l\'annonce ne peut pas etre vide<br>';
  $tabValide = false;
}

//---------------- Description courte ------------
$description_courte = htmlspecialchars($description_courte);
$tab['description_courte'] = $description_courte;
if (strlen($description_courte) > 255){
  $tab['message'] .= 'Description courte de l\'annonce trop longue <br>';
  $tabValide = false;
}

//---------------- Description longue ------------
$description_longue = htmlspecialchars($description_longue);
$tab['description_longue'] = $description_longue;

//---------------- Selection categorie ------------
$tab['select_categorie'] = $select_categorie;

//---------------- Photo ------------
/*if(!empty($_FILES['upload_photo']['name'])){
    $tab['upload_photo'] = $_FILES['upload_photo']['name'];
    if (strlen($tab['upload_photo']) > 50){
      $tab['message'] .= 'Nom de fichier trop long veuillez renommer<br>';
      $tabValide = false;
    }
}*/

//---------------- Adresse annonce------------
$addresse_annonce = htmlspecialchars($addresse_annonce);
$tab['addresse_annonce'] = $addresse_annonce;
if (strlen($addresse_annonce) > 50){
  $tab['message'] .= 'Adresse l\'annonce trop longue <br>';
  $tabValide = false;
}

//---------------- Ville annonce------------
$ville_annonce = htmlspecialchars($ville_annonce);
$tab['ville_annonce'] = $ville_annonce;
if (strlen($ville_annonce) > 20){
  $tab['message'] .= 'Ville de l\'annonce trop longue <br>';
  $tabValide = false;
}
elseif (strlen($ville_annonce) < 1){
  $tab['message'] .= 'La ville de l\'annonce ne peut pas etre vide<br>';
  $tabValide = false;
}

//---------------- CP annonce------------
$cp_annonce = htmlspecialchars($cp_annonce);
$tab['cp_annonce'] = $cp_annonce;
if (strlen($cp_annonce) > 5){
  $tab['message'] .= 'Code Postal de l\'annonce trop long <br>';
  $tabValide = false;
}
elseif (strlen($cp_annonce) < 1){
  $tab['message'] .= 'Le code postal de l\'annonce ne peut pas etre vide<br>';
  $tabValide = false;
}

//---------------- CP annonce------------
$pays_annonce = htmlspecialchars($pays_annonce);
$tab['pays_annonce'] = $pays_annonce;
if (strlen($pays_annonce) > 20){
  $tab['message'] .= 'Pays de l\'annonce trop long <br>';
  $tabValide = false;
}

/*
*/

if (empty($tab['message']) || strlen($tab['message']) < 1){
  $tab['message'] = 'Creation de l\'annonce en cours...';
}

if ($tabValide){
  $tab['validation'] = 'ok';
} else {
  $tab['validation'] = 'err';
}


echo json_encode($tab);
