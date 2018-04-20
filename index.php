<?php
$GLOBALS['currentPageName'] = 'Inscription';//Set up la globale qui va etre utilisee pour le titre de la page

$controllerToCall = 'inscription_controller.php';//set up le controller a appeler

require_once('header.inc.php');//tete

require_once($controllerToCall);//corps = controller

require_once('footer.php');//pied
