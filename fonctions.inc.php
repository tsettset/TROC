<?php

//---------------Fonction debug()

function debug($var, $mode = 1){

  echo '<div style="background: orange; padding : 5px;">';
  $trace = debug_backtrace();
  //echo '<pre>'; print_r($trace); echo '</pre>';
  echo "Debug demandé dans le fichier : ". $trace[0]['file'] ." à la ligne ". $trace[0]['line'] ."<hr>";
  if($mode===1){

    echo '<pre>'; print_r($var); echo '</pre>';

  }else{

    echo '<pre>'; var_dump($var); echo '</pre>';
  }
  echo '</div>';
}

//-----------------------------------------------------------------
function internauteEstConnecte(){

  //cette fonction m'indique si le membre est connecte


  if(!isset($_SESSION['donnees'])){ // si session membre n'est pas defini, cela veut dire que l'internaute n'est pas passe par la page inscription

    return false;
    
  }else{

    return true;
  }
}
//------------------------------------------------------------------

function internauteEstConnecteEtEstAdmin(){

  //cette fonction m'indique si le membre est admin

  if(internauteEstConnecte() && $_SESSION['donnees']['statut']==1){
    //si la session membre est definie et que le statut est à 1, c'est qu'il est admin on retourne 'true'

    return true;
  }else{
    return false;
  }
}

//---------------------Fonctions de validation d'inputs----------------------

function validePostEmail($emailPostName){
  //use this function to check if $_POST[$emailPostName] is set & is a valid email
  //returns the email as a string if everything checks out
  //returns null if $_POST not set
  //returns empty string if set but not valid email
  return (filter_input(INPUT_POST, $emailPostName, FILTER_VALIDATE_EMAIL));
}
