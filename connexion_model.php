   <?php
    include 'fonctions.inc.php';
    include 'init.inc.php';

    debug($bdd);
    function verifConnexion($valeur){
    debug($bdd);
    $req=$bdd->prepare('select * from membre where pseudo=:pseudo');
    $req->bindValue(':pseudo', $valeur['pseudo'], PDO::PARAM_STR);
    $req->execute();
   
    }
