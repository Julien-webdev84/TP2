<?php

class User{

    private $identifiant;
    private $pseudo;
    private $motdepasse;
  

    function __construct(string $identifiant, string $pseudo, string $motdepasse,) {
        $this->identifiant = $identifiant;
        $this->pseudo= $pseudo;
        $this->motdepasse = $motdepasse;
    }
    function saveUser(){
      echo"sauvegarde utilisateur";
      $handle =fopen("Save/user.json","w");
      $json=json_encode($this);
    }
}
    

   
