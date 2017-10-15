<?php

interface Id
{
    public function setId(string $id);
}

class Citizens implements Id
{
    public $name;
    public $age;
    public $id;
    
    public function __construct(string $name, int $age, string $id) {
        $this->setAge($age);
        $this->setName($name);
        $this->setId($id);
    }
    
    function setName(string $name) {
        $this->name = $name;
    }

    function setAge(int $age) {
        $this->age = $age;
    }

    function setId(string $id) {
        $this->id = $id;
    }
    
}

class Robots implements Id
{
    public $model;
    public $id;
    
    public function __construct(string $model, string $id) {
        $this->setModel($model);
        $this->setId($id);
    }
    
    function setModel(string $model) {
        $this->model = $model;
    }

    function setId(string $id) {
        $this->id = $id;
    }
}

$migrants = [];

while(1)
{
    $input = explode(" ", trim(fgets(STDIN)));
    if($input[0] == "End")
    {
        break;
    }
    
    if(isset($input[2]))
    {
        $migrants[] = new Citizens($input[0], $input[1], $input[2]);
    }
    else
    {
        $migrants[] = new Robots($input[0], $input[1]);
    }
    
}

$fakeids = trim(fgets(STDIN));

foreach($migrants as $intruder)
{
    $last3Digits = substr($intruder->id, -3);
    if($last3Digits == $fakeids)
    {
        echo $intruder->id.PHP_EOL;
    }
}

