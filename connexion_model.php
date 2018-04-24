   <?php
    include 'fonctions.inc.php';
    include 'init.inc.php';

    debug($bdd);
    
function verifConnexion(){
     global $bdd;

    $req=$bdd->query('select * from membre');
    $donnees=$req->fetchAll(PDO::FETCH_ASSOC);
    debug($donnees);
      
}
    
verifConnexion();
 
?>