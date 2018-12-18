
<?php

//include 'functions.php';
/*
$Tasks=[

    "monday"=>"maths",

    "tuesday"=>"physics",

    "wednesday"=>"chemistry",

    "contribute"=> false

];

foreach($Tasks as $task=>$subject){
       
     echo "<b>".ucwords($task)."</b> : ".ucwords($subject)."<br/>";
}

echo $Tasks["contribute"] ? 'it is true' : 'It is false';

if($Tasks["contribute"]){

    echo "in";

}else{

    echo "out<br/><br/>";
}

function Dumper($name,$class,$subject){

    echo "<pre>";

    var_dump($name,$class,$subject);

    echo "</pre>";

}

Dumper('Blessing','Intern','Software Development');

echo "<br/><br/>";*/

class Task{

    public $description;

    protected $completed= false;

    public function __construct($description){

        $this->description= $description;

    }

    public function iscomplete(){

        return $this->completed;

    }

    public function complete(){

        $this->completed=true;

    }



    

}



$task= [

    new Task('I am Hungry'),

    new Task ('I need to eat'),

    new Task('I want rice')

];


//echo "<pre>";


//echo "</pre>";

require 'index.view.php';

