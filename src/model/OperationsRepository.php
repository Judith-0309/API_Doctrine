<?php

 namespace src\model;
class OperationsRepository
{
    public function getOperations($id){
   
        include "bootstrap.php";

        $operations = $entityManager->getRepository('Operations')->findBy(['id'=>$id]);
        return $operations;
    }
    
}



    
