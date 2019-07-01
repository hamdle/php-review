<?php

class QueryBuilder {

    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function selectAll($table) {
        $statement = $this->pdo->prepare("select * from {$table}");
    
        $statement->execute();
        
        // Load all results into memory
        // Stored as objects
        return $statement->fetchAll(PDO::FETCH_CLASS); 
    }
}