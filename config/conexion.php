<?php
//config/conexion.php
Session_start();

class Conectar
{
    protected $dbh;
    
    //Solo cambia esto según tu ambiente:
    // 'dev', 'testing' o 'prod'
    private $ambiente = 'dev'; // <-- CAMBIA
    
    protected function Conexion()
    {
        try {
            if ($this->ambiente == 'dev') {
                // DESARROLLO
                $conectar = $this->dbh = new PDO(
                    "sqlsrv:server=;Database=bd_instituciones_testing",
                    "a", 
                    "a"
                );
            } 
            elseif ($this->ambiente == 'testing') {
                // TESTING
                $conectar = $this->dbh = new PDO(
                    "sqlsrv:server=;Database=bd_instituciones_testing",
                    "a", 
                    "a"
                );
            } 
            else {
                // PRODUCCION
                $conectar = $this->dbh = new PDO(
                    "sqlsrv:server=;Database=bd_instituciones_prod",
                    "a", 
                    "a"
                );
            }
            
            return $conectar;
             
        } catch (Exception $e) {
            print "Error Conexion BD" . $e->getMessage() . "<br/>";
            die();
        }
    }
     
    /**
     * Summary of obtenerBaseUrl
     * @return string
     * Ruta importante para el funcionamiento de la API
     */
    public static function obtenerBaseUrl()
    {
        $instance = new self();
        
        if ($instance->ambiente == 'dev') {
            return "/demorutas/";
        } 
        elseif ($instance->ambiente == 'testing') {
            return "/testing/";
        } 
        else {
            return "/frm.cafedcallao.gob.pe/"; // prod
        }
    }
   
    /**
     * Summary of dominio
     * @return string
     */
    public static function dominio()
    {
        $instance = new self();
        
        if ($instance->ambiente == 'dev') {
            return "http://localhost/demorutas/";
        } 
        elseif ($instance->ambiente == 'testing') {
            return "https://frm.cafedcallao.gob.pe/testing/";
        } 
        else {
            return "https://frm.cafedcallao.gob.pe/"; //prod
        }
    }

   
 
 
}
?>