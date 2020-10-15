<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity @ORM\table(name="operations")
 **/

  

class Operations
{
     /** @ORM\id @ORM\Column(type="integer") @ORM\GeneratedValue **/
     private $id;
   
     /** @ORM\Column(type="text") */
     private $typeOperation;
     /** @ORM\Column(type="datetime") */
     private $dateOperation;
     /** @ORM\Column(type="string") */
     private $montant;
   
    
    /**
     * Many features have one product. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Compte", inversedBy="operations")
     * @ORM\JoinColumn(name="compte_id", referencedColumnName="id")
     */
     private $compte;
    

     public function __construct()
     {
     }

     /**
      * Get the value of id
      */
     public function getId()
     {
          return $this->id;
     }

     /**
      * Set the value of id
      *
      * @return  self
      */
     public function setId($id)
     {
          $this->id = $id;

          return $this;
     }

    
     /**
      * Get the value of typeOperation
      */
     public function getTypeOperation()
     {
          return $this->typeOperation;
     }

     /**
      * Set the value of typeOperation
      *
      * @return  self
      */
     public function setTypeOperation($typeOperation)
     {
          $this->typeoperation = $typeOperation;

          return $this;
     }

     /**
      * Get the value of dateOperation
      */
     public function getDateOperation()
     {
          return $this->dateOperation;
     }

     /**
      * Set the value of dateOperation
      *
      * @return  self
      */
     public function setDateOperation($DateOperation)
     {
          $this->DateOperation = $DateOperation;

          return $this;
     }

     /**
      * Get the value of montant
      */
     public function getMontant()
     {
          return $this->montant;
     }

     /**
      * Set the value of montant
      *
      * @return  self
      */
     public function setMontant($montant)
     {
          $this->montant = $montant;

          return $this;
     }


     /**
      * Get the value of comptes
      */
     public function getComptes()
     {
          return $this->comptes;
     }

     /**
      * Set the value of comptes
      *
      * @return  self
      */
     public function setComptes($comptes)
     {
          $this->comptes = $comptes;

          return $this;
     }

    


     /**
      * Get many features have one product. This is the owning side.
      */ 
     public function getCompte()
     {
          return $this->compte;
     }

     /**
      * Set many features have one product. This is the owning side.
      *
      * @return  self
      */ 
     public function setCompte($compte)
     {
          $this->compte = $compte;

          return $this;
     }
}



















?>