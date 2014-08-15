<?php


include_once 'capaDato.php'; 


class Transaccion
{
    private $Id;
    private $Cuenta;
    private $Fecha;
    private $Tipo;
    private $Valor;


    public function __construct($id, $cuenta, $fecha, $tipo, $valor) {
        
        $this->Id=$id;
        $this->Cuenta=$cuenta;
        $this->Fecha=$fecha;
        $this->Tipo=$tipo;
        $this->Valor=$valor;
         
    }
     
    public function getId()
    {
        return $this->Id;
    }
    public function setId($id)
    {
        $this->Id=$id;
    }
    
    
    public function getCuenta()
    {
        return $this->Cuenta;
    }
    public function setCuenta($cuenta)
    {
        $this->Cuenta=$cuenta;
    }
    
        
    public function getFecha()
    {
        return $this->Fecha;
    }
    public function setFecha($fecha)
    {
        $this->Fecha=$fecha;
    }
    
    
    public function getTipo()
    {
        return $this->Tipo;
    }
    public function setTipo($tipo)
    {
        $this->Tipo=$tipo;
    }
    
    
    public function getValor()
    {
        return $this->Valor;
    }
    public function setValor($valor)
    {
        $this->Valor=$valor;
    }
     
     
 public function limpiar()
    {
        $this->Id=0;
        $this->Fecha=0;
        $this->Cuenta=1;
        $this->Tipo=1;
        $this->Valor=0;
    }
    public function grabar()
    {
        $_oBD = baseDato::get_instancia();
        $_oBD->conectar();
        $stmt= $_oBD->ejecutar("select count(*) as existe from  transaccion where id=$this->id");
        $rs = $stmt->fetch(PDO::FETCH_OBJ);
        if ($rs->existe>0)
        {
            $this->modificar();
        }
        else
        {
            $this->insertar();
        }
    }
    public function insertar()
    {
        $_oBD = baseDato::get_instancia(); 
        $_oBD->conectar();
        $nuevaCuenta=  $this->getCuenta();
        $_oBD->ejecutar("insert into transaccion(id,cuenta,fecha,tipo,valor)"
                . " values($this->Id,$this->Cuenta,$this->Fecha,$this->Tipo,$this->Valor,$nuevaCuenta->getNumero()");
    }
    public function modificar()
    {
        $_oBD = baseDato::get_instancia(); 
        $_oBD->conectar();
        $_oBD->ejecutar("update transaccion "
                . "set cuenta=$this->Cuenta, fecha=$this->Fecha, tipo=$this->Tipo, valor=$this->Valor where"
                . " id=$this->id");
    }
    public function eliminar()
    {
        $_oBD = baseDato::get_instancia(); 
        $_oBD->conectar();
        $_oBD->ejecutar("delete from transaccion where id= $this->id");
    }
    public function consultar()
    {
        $_oBD = baseDato::get_instancia();
        $_oBD->conectar();
        $stmt= $_oBD->ejecutar("select * from  transaccion where id=$this->id");
        $rs = $stmt->fetch(PDO::FETCH_OBJ);
        $this->Cuenta= $rs->Cuenta;
        $this->Fecha=$rs->Fecha;
        $this->Tipo=$rs->Tipo;
        $this->Valor=$rs->Valor;        
        
    }
    
    public function consultarCuenta()
    {
        
        $_oBD = baseDato::get_instancia();
        $_oBD->conectar();
        $stmt= $_oBD->ejecutar("select * from  cuenta");
        return $stmt->fetchAll();
    }
    
    
    public function consultarTipo()
    {
        
        $_oBD = baseDato::get_instancia();
        $_oBD->conectar();
        $stmt= $_oBD->ejecutar("select * from  tipos");
        return $stmt->fetchAll();
    }
    
}


?>