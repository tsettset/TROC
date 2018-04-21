<?php
require_once('init.inc.php');
require_once('fonctions.inc.php');

$GLOBALS['currentPageName'] = 'Fiche Annonce';//Set up la globale qui va etre utilisee pour le titre de la page

$controllerToCall = 'fiche_annonce_ctrl.php';//set up le controller a appeler

require_once('header.inc.php');//tete

require_once($controllerToCall);//corps = controller

require_once('footer.php');//pied
