<?php
//---------------------CONNEXION BDD
try{

 $bdd= new PDO('mysql:host=localhost; dbname=troc','root', '', array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

}


catch (Exception $e)
       
       {

    echo 'espece de noob ! tu as foire !', $e->getMessage();
    die();
}

//-------------------- SESSION

session_start();

//-------------------- CHEMIN

define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT']. "/TROC/");
//echo '<pre>'; print_r($_SERVER); echo '</pre>';
//echo RACINE_SITE;
/* cette constante retourne le chemin physique du dossier boutique sur le serveur
Lors de l'enregistrement d'images / photos, nous aurons besoin du chemin complet du dossier photo pour enregistrer la photo */

define("URL", 'http://localhost/TROC/');

//cette constante nous servira à enregistrer l'URL d'une photo / image dans la BDD, on ne conserve jamais la photo elle même, ce serait trop lourd pour la BDD

//---------- VARIABLE

$content = '';

//---------------REDIRIGER LA PAGE

/*$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'boutique.php';*/

//------------

//require_once("fonctions.inc.php");
