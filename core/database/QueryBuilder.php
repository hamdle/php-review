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

    public function insert($table, $params) {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table, 'two', 'three'
        );

        $message = "Inserting value into database";
        var_dump($message);
        var_dump($sql);
        //die(var_dump($sql));
        //$statement = $this->pdo->prepare("insert into {$table}");
    
        //$statement->execute(['name' => 'Eric']);
    }
}