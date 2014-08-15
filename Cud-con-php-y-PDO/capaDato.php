<?php


class baseDato {
        private $usuario;
        private $password;
        private $conn;
        
        private static $_oSelf = null;
        public static function get_instancia()
    {
        //Si no hay instancia de CBaseDatos 
        //en la variable estatica $_oSelf
        if( !self::$_oSelf instanceof self ) 
        {
            //Se crea un objeto de CBaseDatos guardandolo
            //en la varialbe estatica
            //new self ejecuta __construct()
            self::$_oSelf = new self;
        }
        //Se devuelve el objeto creado
        return self::$_oSelf;
    }
        public function __construct() {
            $this->usuario="root";
            $this->password="";
        }
        
        
        public function conectar()
        {
            try
            {
            $this->conn = new PDO('mysql:host=localhost;dbname=movimientobd', $this->usuario, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                echo "ERROR: " . $e->getMessage();
            }
        }
        
        
        public function ejecutar($sentenciaSQL)
        {
            $stmt = $this->conn->prepare($sentenciaSQL);
            $stmt->execute();
            return $stmt;
            
        }
        
        
}
