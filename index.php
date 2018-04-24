<?php
require_once('fonctions.inc.php');
require_once('init.inc.php');

/*
* Definition de la globale pour le titre de la page
* et du controller a appeler
*/

$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);//traitement securite de $_GET['page']

switch ($page) {
  case 'fannonce':
  $GLOBALS['currentPageName'] = 'Fiche Annonce';
  $controllerToCall = 'fiche_annonce_ctrl.php';
  break;
  default:
  $GLOBALS['currentPageName'] = 'Accueil';
  $controllerToCall = 'accueil_ctrl.php'; //valeur par defaut du controller
  break;
}



//require_once('header.test.php');//tete
require_once('header.inc.php');//tete

require_once('navbar.php');//navigation
//echo 'controlleur appele : '.$controllerToCall.'<br>';
require_once($controllerToCall);//corps = controller

//require_once('footer.php');//pied
