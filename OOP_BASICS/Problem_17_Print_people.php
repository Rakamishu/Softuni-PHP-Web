<?php

class Person
{
    public $name;
    public $age;
    public $occupation;
    
    public function __construct(string $name, int $age, string $occupation) {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }
    
    public function __toString() {
        return $this->name.' - age: '.$this->age.', occupation: '.$this->occupation."\n";
    }
    
    public function getAge()
    {
        return $this->age;
    }
}


$arr = [];

while(true)
{
    $input = explode(" ", trim(fgets(STDIN)));
    if($input[0] == "END")
    {
        break;
    }
    
    $name = $input[0];
    $age = $input[1];
    $occupation = $input[2];
    
    $arr[] = new Person($name, $age, $occupation);
    
}

function sortAge($a1, $a2)
{
    return $a1->getAge() > $a2->getAge();
}
usort($arr, "sortAge");

foreach ($arr as $person) {
    echo $person;
}