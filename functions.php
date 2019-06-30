<?php

function getDatabase() {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'root');
    }
    catch (PDOException $e) {
        die($e->getMessage());
    }
}

function fetchAllTasks($pdo) {

    $statement = $pdo->prepare('select * from todos');
    
    $statement->execute();
    
    // Load all results into memory
    // Stored as objects
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task'); 
}

function dd($names_arr) {
    var_dump($names_arr);
    die();
}