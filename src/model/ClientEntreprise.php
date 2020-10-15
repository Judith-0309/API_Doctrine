<?php

require_once './../../bootstrap.php';



class ClientEntrepriseDb
{
    public function Add($ClientEntreprise)
    {
        //On donne à $db la fonction getEntity 
        // Et c'est plus facile car si on doit apporter un modifiera une seule fois
        $db = getEntity();
        $db->persist($ClientEntreprise);
        $db->flush();
        return $ClientEntreprise->getId();
    } 
}
