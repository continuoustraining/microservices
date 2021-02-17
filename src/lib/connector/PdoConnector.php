<?php

namespace API\Views\connector;

class PdoConnector {
    
    protected $connection;
    
    public function __construct() {
        
        $this->connection = new \PDO('mysql:host='.DB_HOST.
        ':3306;dbname='.DB_NAME, DB_USER, DB_PASS);
        
    }
    
    public function getConnector() {
        return $this->connection;
    }
    
}