<?php

class Person
{
    
    public $name;
    public $age;
    
    public function __construct(string $name, int $age) {
	$this->name = $name;
	$this->age = $age;
	//echo $this->name . " " . $this->age."\n";
    }
    
}

$lines = trim(fgets(STDIN));
$people = [];
for($i = 0; $i < $lines; $i++)
{
    $input = explode(' ', trim(fgets(STDIN)));
    
    $name = $input[0];
    $age = $input[1];
    
    if($age > 30)
    {
        $people[] = new Person($name, $age);
    }
}

asort($people);

foreach($people as $person)
{
    echo $person->name.' - '.$person->age."\n";
}