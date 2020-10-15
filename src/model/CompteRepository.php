<?php
//code by judith


namespace src\model;

class CompteRepository
{
    public function Add($Compte)
    {
        require_once './../../bootstrap.php';
        //On donne à $db la fonction getEntity 
        // Et c'est plus facile car si on doit apporter un modifiera une seule fois
        $db = $entityManager;
        $db->persist($Compte);
        $db->flush();
        
        return $Compte->getId();
    } 

    // public function getCompte($numeroCompte)
    // {
    //     $operations = $this->connexion->getRepository('Comptes')->findBy(['numero_compte'=>$numeroCompte]);
    //     return $operations;
    // }
    public function getSolde($numeroCompte){
   
        include_once "bootstrap.php";
        $compte = $entityManager->getRepository('Compte')->findBy(['NumeroCompte'=>$numeroCompte]);
        return $compte;
    }
}



   

