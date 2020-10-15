<?php
//les espaces de noms l'annotation qui est une classe dans Doctrine sera mapper à ORM
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity @ORM\Table(name="clientparticulier")
 */

class Clientparticulier
{
    //Pour la clé primaire
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
     
    private $id;
    /** @ORM\Column(type="string") **/ 
    private $nom;
    /** @ORM\Column(type="string") **/ 
    private $prenom;
    /** @ORM\Column(type="string") **/ 
    private $telephone;
     /** @ORM\Column(type="string") **/
    private $genre;
     /** @ORM\Column(type="text") **/
    private $email;
    /** @ORM\Column(type="string") **/ 
    private $adresse;
     /** @ORM\Column(type="string") **/ 
    private $profession;
     /** @ORM\Column(type="string") **/ 
    private $salarie;
     /** @ORM\Column(type="text") **/ 
    private $salarie_actuel;
     /** @ORM\Column(type="decimal") **/ 
    private $nom_employeur;
     /** @ORM\Column(type="string") **/ 
    private $cni;

    
     /**
     * Many compte have one clientEntreprise. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Compte", inversedBy="idClientPhysique")
     * @ORM\JoinColumn(name="idcompte", referencedColumnName="id")
     */
    private $numeroCompte; 
     



public function __construct()
{

}
    public function getId()
    {
       return $this->id;
    }
    public function setId($id)
    {
        $this->id=$id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom=$nom;
    }

        public function getPrenom()
    {
            return $this->prenom;
    }
    public function setPrenom($prenom)
    {
           $this->prenom=$prenom;
    }

        public function getTelephone()
    {
            return $this->telephone;
    }
    public function setTelephone($telephone)
    {
            $this->telephone=$telephone;
    }


        public function getGenre()
    {
            return $this->genre;
    }
    public function setGenre($genre)
    {
            $this->genre=$genre;
    }

        public function getEmail()
    {
            return $this->email;
    }
    public function setEmail($email)
    {
             $this->email=$email;
    }

        public function getAdresse()
    {
            return $this->adresse;
    }
    public function setAdresse($adresse)
    {
           $this->adresse=$adresse;
    }

        public function getProfession()
    {
            return $this->profession;
    }
    public function setProfession($profession)
    {
           $this->profession=$profession;
    }

        public function getSalarie()
    {
            return $this->salarie;
    }
    public function setSalarie($salarie)
    {
             $this->salarie=$salarie;
    }


        public function getSalaireActuel()
    {
            return $this->salarie_actuel;
    }
    public function setSalaireActuel($salarie_actuel)
    {
            $this->salarie_actuel=$salarie_actuel;
    }

        public function getNomEmployeur()
    {
            return $this->nomEmployeur;
    }
    public function setNomEmployeur($nom_employeur)
    {
           $this->nom_employeur=$nom_employeur;
    }

        public function getCni()
    {
            return $this->cni;
    }
    public function setCni($cni)
    {
           $this->cni=$cni;
    }

    /**
     * Get many compte have one clientEntreprise. This is the owning side.
     */ 
    public function getNumeroCompte()
    {
        return $this->numeroCompte;
    }

    /**
     * Set many compte have one clientEntreprise. This is the owning side.
     *
     * @return  self
     */ 
    public function setNumeroCompte($numeroCompte)
    {
        $this->numeroCompte = $numeroCompte;

        return $this;
    }
}





