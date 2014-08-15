<?php

include_once 'capaDato.php';

class Cuenta
{
    private $Id;
    private $Numero;
    private $Socio;
    
     
    public function __construct($id, $numero, $socio) {
        $this->Id=$id;
        $this->Numero=$numero;
        $this->Socio=$socio;
         

    }
     
    public function getId()
    {
        return $this->Numero;
    }
    public function setId($id)
    {
        $this->Nombre=$id;
    }
    
    
    public function getNumero()
    {
        return $this->Numero;
    }
    public function setNumero($numero)
    {
        $this->Nombre=$numero;
    }
     
    
    public function getSocio()
    {
        return $this->Socio;
    }
    public function setSocio($socio)
    {
        $this->Socio=$socio;
    }
      
     
       
}


?>