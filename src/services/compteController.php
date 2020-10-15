<?php
require_once('./../../src/model/Compte.php');
require_once('./../../src/entities/Compte.php');

$compte = new CompteDb();
//$compte = new CompteDb();
//extract($_POST);
if(isset($_POST)){
    
    $Ouv_compte = new Compte();
         //on recupere les donnees saisies par l'utlisateur
        $Ouv_compte->setTypeCompte($_POST["typeCompte"]);
        NULL;NULL;
       
        $Ouv_compte->setNumeroCompte($_POST["NumeroCompte"]);
        $Ouv_compte->setCleRib($_POST["CleRib"]);
        $Ouv_compte->setEtatCompte($_POST["EtatCompte"]);
        $Ouv_compte->setDepotInitial($_POST["DepotInitial"]);
        $Ouv_compte->setDateOuverture($_POST["DateOuverture"]);

        $b= $compte->Add($Ouv_compte);
        //var_dump($b);
       
        //Si l'insertion marche qu'il nous retourne la valeur de a
        if($b!=null)
        {
           echo "insertion reussie";
        } 
        else 
        {
           echo "echec d'insertion";
       }
    }
      
        ?>
