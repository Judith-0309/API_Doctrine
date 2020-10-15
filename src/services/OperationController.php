<?php
namespace service;

use src\model\CompteRepository;
use src\model\OperationsRepository;
class OperationController //Heritage(extends)//
{
    

    public function getSoldeCompte($num)
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: access");
        header("Access-Control-Allow-Methods: GET");
        header("Access-Control-Allow-Credentials: true");
        header('Content-Type: application/json');

        $compteRepository = new CompteRepository();
        $data = $compteRepository->getSolde($num); // retourne des objets
        $solde = array();
       
        foreach ($data as $key => $value) {
        
            $solde[] = [
                "solde" =>   $value->getSolde()
            ];
              
        }
        if(!$solde){
            $solde[] = [
                "message " =>   "le  numero de compte n'existe pas"
            ];
        }
        echo  json_encode($solde); 
        
           
    }

    public function getOperations($num)
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: access");
        header("Access-Control-Allow-Methods: GET");
        header("Access-Control-Allow-Credentials: true");
        header('Content-Type: application/json');
        
        
        $compteRepository = new CompteRepository();
        
        $compte = $compteRepository->getSolde($num);
       
        foreach ($compte as $key => $value) {
        
            $compte_id = $value->getID();
         
        }
        
        $operationRepository = new OperationsRepository();

        $listOp = $operationRepository->getOperations($compte);
      
        $tab = array();
        $i = 0;
        foreach ($listOp as $key => $value) {
            $tab[$i] = [
                "id" => $value->getID(),
                "typeOperation" => $value->getTypeOperation(),
                "dateOperation" => $value->getDateOperation(),
                "montant" => $value->getMontant()
               // "Nom" => $value->getCompte()->getIdClientPhysique()
            ];
            $i++;
        }
        echo  json_encode($tab);
        //var_dump($data);        
    }

    public function getAll()
    {   
        // required headers
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: access");
        header("Access-Control-Allow-Methods: GET");
        header("Access-Control-Allow-Credentials: true");
        header('Content-Type: application/json');
        // $operation= new Operations(); 
        // $operation=$operation->findAll();//array("COMPTE_AFFECTATION", "COMPTE_ADMIN");

        // echo  json_encode($operation);
    }
}