<?php

interface Id
{
    public function setId(string $id);
}

interface Birthdays 
{
    public function setBirthday(string $birthday);
}

class Citizens implements Id, Birthdays
{
    public $name;
    public $age;
    public $id;
    public $birthday;
    
    public function __construct(string $name, int $age, string $id, string $birthday) {
        $this->setAge($age);
        $this->setName($name);
        $this->setId($id);
        $this->setBirthday($birthday);
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
    public function setBirthday(string $birthday) {
        $this->birthday = $birthday;
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

class Pets implements Birthdays
{
    public $name;
    public $birthday;
    
    public function __construct(string $name, string $birthday) {
        $this->setName($name);
        $this->setBirthday($birthday);
    }
    
    function setName(string $name) {
        $this->name = $name;
    }

    function setBirthday(string $birtday) {
        $this->birthday = $birtday;
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
    
    if($input[0] == "Citizen")
    {
        $migrants[] = new Citizens($input[1], $input[2], $input[3], $input[4]);
    }
    elseif($input[0] == "Robot")
    {
        $migrants[] = new Robots($input[1], $input[2]);
    }
    elseif($input[0] == "Pet")
    {
        $migrants[] = new Pets($input[1], $input[2]);
    }
    
}

$year = trim(fgets(STDIN));
$count = 0;

foreach($migrants as $bornThisYear)
{
    if(isset($bornThisYear->birthday))
    {
        $split = explode("/", $bornThisYear->birthday);
        if($year == $split[2])
        {
            echo $bornThisYear->birthday.PHP_EOL;
            $count++;
        }
    }
    
}
if($count == 0){
    echo '<no output>';
}