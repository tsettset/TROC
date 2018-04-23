<?php

    debug($bdd);
    function insertionInscription($valeur){
        global $bdd;
        $req=$bdd->prepare('insert into membre(pseudo, mdp, nom, prenom, telephone, email, civilite, statut)values(:pseudo, :mdp, :nom, :prenom, :telephone, :email, :civilite, :statut)');
        $req->bindValue(':pseudo', $valeur['pseudo'], PDO::PARAM_STR);
        $req->bindValue(':mdp', $valeur['mdp'], PDO::PARAM_STR);
        $req->bindValue(':nom', $valeur['nom'], PDO::PARAM_STR);
        $req->bindValue(':prenom', $valeur['prenom'], PDO::PARAM_STR);
        $req->bindValue(':telephone', $valeur['telephone'], PDO::PARAM_STR);
        $req->bindValue(':email', $valeur['email'], PDO::PARAM_STR);
        $req->bindValue(':civilite', $valeur['civilite']);
        $req->bindValue(':statut', 0, PDO::PARAM_INT);

        $req->execute();


}


?>
