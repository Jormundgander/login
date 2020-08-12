<?php

class Connection extends PDO
{
    private $host       = 'localhost';
    private $database   = 'work';
    private $username   = 'root';
    private $pass       = '';
    private $port       = 3306;
    private $sgbd       = 'mysql';
    private $status     = false;

    public function __construct()
    {
        try{

            // Intentamos establecer conexión con la BD
            parent::__construct("{$this->sgbd}:host={$this->host};dbname={$this->database};port={$this->port}", $this->username, $this->pass);
            
            $this->status = true;
        
        }catch(PDOException $e) {
        
            return 'Error en la conexión a la base de datos, detalles: ' . $e->getMessage();

        }
    }


    public function checkConnection()
    {
        return $this->status;
    }
}