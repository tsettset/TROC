<?php

class membre{

    
    private $pseudo;
    private $nom;
    private $prenom;
    private $mdp;
    private $email;
    private $telephone;
    private $civilite;



    public function __construct($pseudo, $nom, $prenom, $mdp, $email, $telephone, $civilite){
        
        $this->pseudo = $pseudo;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mdp = $mdp;
        $this->email = $email;
        $this->telephone= $telephone;
        $this->civilite = $civilite;     
    }

}

?>