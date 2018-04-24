<?php

include 'connexion_model.php';

if(!internauteEstconnecte){
    
  
   if(verifConnexion()){
       
       echo 'true';
   }else{
       
       echo 'false';
   }
       
}






include 'connexion_view.php';



