<?php

interface Id
{
    public function setId(string $id);
}

interface Birthdays 
{
    public function setBirthday(string $birthday);
}

interface Buyer
{
    public function buyFood();
}

class Citizens implements Id, Birthdays, Buyer
{
    public $name;
    public $age;
    public $id;
    public $birthday;
    public $food = 0;
    
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
    public function buyFood() {
        $this->food = $this->food + 10;
    }
}

class Rebel implements Buyer
{
    public $name;
    public $age;
    public $group;
    public $food = 0;
    
    public function __construct(string $name, int $age, string $group) {
        $this->setName($name);
        $this->setAge($age);
        $this->setGroup($group);
    }
    
    function setName($name) {
        $this->name = $name;
    }

    function setAge($age) {
        $this->age = $age;
    }

    function setGroup($group) {
        $this->group = $group;
    }
        
    public function buyFood() {
        $this->food = $this->food + 5;
    }
}

$migrants = [];
$lines = trim(fgets(STDIN));

for($i = 0; $i < $lines; $i++)
{
    $input = explode(" ", trim(fgets(STDIN)));
    
    if(isset($input[3])) //has a birthday so it is a citizen
    {
        $migrants[$input[0]] = new Citizens($input[0], $input[1], $input[2], $input[3]);
    }
    else //rebel
    {
        $migrants[$input[0]] = new Rebel($input[0], $input[1], $input[2]);
    }
}


while(1)
{
    $name = trim(fgets(STDIN));
    if($name == "End")
    {
        break;
    }
    
    if(array_key_exists($name, $migrants))
    {
        $migrants[$name]->buyFood();
    }
    
}

$totalFoodBought = 0;

foreach($migrants as $foodBought)
{
    $totalFoodBought += $foodBought->food;
}

echo $totalFoodBought.' units food';
