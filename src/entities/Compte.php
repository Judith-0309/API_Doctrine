<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity @ORM\Table(name="compte")
 */
class Compte
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;

     /** @ORM\Column(type="string") **/
    private $typeCompte;

       
   /**
     * One clientparticulier has many compte. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Clientparticulier", mappedBy="numeroCompte")
     */
    private $idClientPhysique;


     /**
     * One clientEntreprise has many compte. This is the inverse side.
     * @ORM\OneToMany(targetEntity="ClientEntreprise", mappedBy="numeroCompte")
     */
     private $idEntreprise;


    
     /** @ORM\Column(type="string") **/
    private $NumeroCompte;
     
    /** @ORM\Column(type="string") **/
    private $CleRib;

     /** @ORM\Column(type="string") **/
    private $EtatCompte;
     
     /** @ORM\Column(type="string") **/
    private $DepotInitial;
    
     /** @ORM\Column(type="datetime") **/
    private $DateOuverture;

    /** @ORM\Column(type="decimal") **/
    private $solde;

    /**
     * One product has many features. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Operations", mappedBy="compte")
     */
    private $operations;
    

   

    public function __construct()
    {
        $operations = new ArrayCollection();
    }
    //getters setters
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id=$id;
    }

    public function getTypeCompte()
    {
        return $this->typeCompte;
    }
    public function setTypeCompte($typeCompte)
    {
        $this->typeCompte=$typeCompte;
    }

    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }
    public function setIdEntreprise($idEntreprise)
    {
        $this->idEntreprise=$idEntreprise;
    }

    public function getIdClientPhysique()
    {
        return $this->IdClientPhysique;
    }
    public function setIdClientPhysique($IdClientPhysique)
    {
        $this->IdClientPhysique=$IdClientPhysique;
    }

        public function getNumeroCompte()
    {
            return $this->NumeroCompte;
    }
    public function setNumeroCompte($NumeroCompte)
    {
           $this->NumeroCompte=$NumeroCompte;
    }

        public function getCleRib()
    {
            return $this->CleRib;
    }
    public function setCleRib($CleRib)
    {
           $this->CleRib=$CleRib;
    }

        public function getEtatCompte()
    {
            return $this->EtatCompte;
    }
    public function setEtatCompte($EtatCompte)
    {
            $this->EtatCompte=$EtatCompte;
    }

        public function getDepotInitial()
    {
            return $this->DepotInitial;
    }
    public function setDepotInitial($DepotInitial)
    {
           $this->DepotInitial=$DepotInitial;
    }

        public function getDateOuverture()
    {
            return $this->DateOuverture;
    }
    public function setDateOuverture($DateOuverture)
    {
             $this->DateOuverture=$DateOuverture;
    }
       

    /**
     * Get one product has many features. This is the inverse side.
     */ 
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * Set one product has many features. This is the inverse side.
     *
     * @return  self
     */ 
    public function setOperations($operations)
    {
        $this->operations = $operations;

        return $this;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @return  self
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }
}
    





