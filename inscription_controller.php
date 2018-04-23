<?php

require_once ('inscription_model.php');

if(isset($_POST['submit'])){


if(isset($_POST) && !empty($_POST)){


    if(!internauteEstConnecte()){
        $valeur = array();
        $valeur['pseudo']=$_POST['pseudo'];
        $valeur['mdp']=$_POST['mdp'];
        $valeur['nom']=$_POST['nom'];
        $valeur['prenom']=$_POST['prenom'];
        $valeur['telephone']=$_POST['telephone'];
        $valeur['email']=$_POST['email'];
        $valeur['civilite']=$_POST['civilite'];
        debug($valeur);
    }

    insertionInscription($valeur);


}else{

    echo 'vide';
}
}

include 'inscription_view.php';
