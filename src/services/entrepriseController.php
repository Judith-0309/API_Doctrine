<?php
require_once('./../../src/model/ClientEntreprise.php');
require_once('./../../src/entities/ClientEntreprise.php');

$principal = new ClientEntrepriseDb(); 
//if(isset($_POST) && !empty($_POST)){
    
if(isset($_POST['envoyer'])){

    $entreprise = new ClientEntreprise();
        //on recupere les donnees saisies par l'utlisateur
        $entreprise->SetNomEntreprise($_POST["nomEntreprise"]);
        $entreprise->SetNinea($_POST["ninea"]);
        $entreprise->SetAdresse($_POST["adresse"]);
        $entreprise->setRaison_Sociale($_POST["raisonSociale"]);
        $entreprise->SetTelephone($_POST["telephone"]);
        $entreprise->SetEmail($_POST["email"]);
        $entreprise->SetRegistreCom($_POST["registreCom"]);
        
        
        


        $ab= $principal->Add($entreprise);
        //Si l'insertion marche qu'il nous retourne la valeur de b
        if($ab){
            echo "insertion reussie";
        } else {
            echo "echec d'insertion";
        }



}
   
?>