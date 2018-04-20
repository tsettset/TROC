
   

   <?php
    include 'fonctions.inc.php';
    include 'init.inc.php';

    
    function getInscription($pseudo, $mdp, $nom, $prenom, $telephone, $email, $civilite){
        
        $req=$bdd->prepare('insert into membre(pseudo, mdp, nom, prenom, telephone, email, civilite)values(:pseudo, :mdp, :nom, :prenom, :telephone, :email, :civilite)');
        $req->bindValue('pseudo', $pseudo, PARAM_STR);
        $req->bindValue('mdp', $mdp, PARAM_STR);
        $req->bindValue('nom', $nom, PARAM_STR);
        $req->bindValue('prenom', $email, PARAM_STR);
        $req->bindValue('telephone', $telephone, PARAM_STR);
        $req->bindValue('email', $email, PARAM_STR);
        $req->bindValue('civilite', $civilite, PARAM_STR);
        $req->execute();
            
        $donnees=$req->fetchAll(PDO::FETCH_ASSOC);
        
        
}


?>