   <?php
    include 'fonctions.inc.php';
    include 'init.inc.php';

    debug($bdd);
    function insertionInscription($valeur){
        
        $req=$bdd->prepare('insert into membre(pseudo, mdp, nom, prenom, telephone, email, civilite)values(:pseudo, :mdp, :nom, :prenom, :telephone, :email, :civilite)');
        $req->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $req->bindValue(':mdp', $mdp, PDO::PARAM_STR);
        $req->bindValue(':nom', $nom, PDO::PARAM_STR);
        $req->bindValue(':prenom', $email, PDO::PARAM_STR);
        $req->bindValue(':telephone', $telephone, PDO::PARAM_STR);
        $req->bindValue(':email', $email, PDO::PARAM_STR);
        $req->bindValue(':civilite', $civilite, PDO::PARAM_STR);
        $req->execute();
            
        
       
        
        
        
}


?>