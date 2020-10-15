<?php
    //namespace core;
    class Core
    {
    public function __construct()
    {   
        
        // $_GET["url"] ==> recuperer l'url autrement dit la route
        //  $url[0] ==> represente la classe (Controller)
        //  $url[1] ==> represente la methode (fonction)
        //  $url[2] ==> represente la l'argument (parametre)
           
        if(isset($_GET["url"])) 
        { 
            // division 
            $url=explode("/",$_GET["url"]);

            //stocker le directory du controller a charger
            $controller_file ="src/services/".$url[0]."Controller.php";
            if(file_exists($controller_file)) 
            { 
                require_once $controller_file; // l'inclusion du fichier
               // stocker le namespace du controller
                $namespace = 'service\\';
                $file = $namespace.$url[0]."Controller"; // stocker la classe avec son namespace

               $controller_object= new $file(); // instancier un objet de la class pour acceder à ses methodes
               
               if(isset($url[1])) // si la methode existe
               {
                   $methode = $url[1];
                   
                   if(method_exists($controller_object,$methode)){
                    $controller_object->$methode($url[2]);
                   }else{
                    $controller_object->$methode();
                   }
                  
                }else{
                    die("la methode ".$url[1]." n'existe pas");
                }
               
            }else {
                die($controller_file." n'existe pas");
            }  
          
        }else {
           echo 'API REST';
        }

    }
        
   
}
