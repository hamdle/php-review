<?php

class Task {
    public $description;
    public $completed = false;

    public function __construct() {

    }

    public function isComplete() {
        echo 'its happening';
        return $this->completed;
    }

    public function complete() {
        $this->completed = true;
    }
}

/*$tasks = array(
    new Task('Eat two sandwiches'),
    new Task('Find cookies'),
    new Task('Load gun')
);*/