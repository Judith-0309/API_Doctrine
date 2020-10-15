<?php
//code by judith
require_once './../../bootstrap.php';



class ClientparticulierDb
{
    public function Add($Clientparticulier)
    {
        //On donne à $db la fonction getEntity 
        // Et c'est plus facile car si on doit apporter un modifiera une seule fois
        $db = getEntity();
        $db->persist($Clientparticulier);
        $db->flush();
        return $Clientparticulier->getId();
    } 
}
