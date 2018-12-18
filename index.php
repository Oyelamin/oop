<?php

class Task{

    public $description;

    public $view = false;

    public function __construct($description){

        $this->description=$description;

    }

    public function View(){
        $this->view= true;
    }

}

$task= new Task("Description");
var_dump($task->view);
var_dump($task->description);
$task->View();

var_dump($task->view);