<?php

require_once('./../../src/model/Clientparticulier.php');
require_once('./../../src/entities/Clientparticulier.php');

$principal = new ClientparticulierDb(); 
//if(isset($_POST) && !empty($_POST)){
    
if(isset($_POST['envoyer'])){
   
   
    $client_particulier = new Clientparticulier();
    // Soit on donne des attributs à la fonction construct 
    //Soit on utlise la méthode d'appel des setters 
       $client_particulier->setNom($_POST["nom"]);
       $client_particulier->setPrenom($_POST["prenom"]);
       $client_particulier->setTelephone($_POST["telephone"]);
       $client_particulier->setGenre($_POST["Genre"]);
       $client_particulier->setEmail($_POST["Email"]);
       $client_particulier->setAdresse($_POST["Adresse"]);
       $client_particulier->setProfession($_POST["Profession"]);
       $client_particulier->setSalarie($_POST["salarie"]);
       $client_particulier->setSalaireActuel($_POST["salaire_actuel"]);
       $client_particulier->setNomEmployeur($_POST["nom_employeur"]);
       $client_particulier->setCni($_POST["cni"]);

    $a= $principal->Add($client_particulier);
    //Si l'insertion marche qu'il nous retourne la valeur de a
    if($a!=null){
        echo "insertion reussie";
    } else {
        echo "echec d'insertion";
    }
}
  
    ?>