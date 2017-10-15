<?php

interface Person 
{
    public function setName(string $name);
    public function setAge(int $age);
}

interface Identifiable 
{
    public function setId($id);
}

interface Birthable
{
    public function setIdBirthdate(string $birthDate, $id);
}

class Citizen implements Person, Identifiable, Birthable
{
    public function __construct(string $name, int $age, $id, string $birthDate) {
        $this->setName($name);
        $this->setAge($age);
        $this->setIdBirthdate($birthDate, $id);
    }
    
    public function setName(string $name) {
        $this->name = $name;
    }
    
    public function setAge(int $age) {
        $this->age = $age;
    }    
    
    public function setIdBirthdate(string $birthDate, $id)
    {
        $this->setBirthdate($birthDate);
        $this->setId($id);
    }
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function setBirthdate(string $birthDate) {
        $this->birthDate = $birthDate;
    }
    
    public function __toString() {
        return $this->name.PHP_EOL.$this->age.PHP_EOL.$this->id.PHP_EOL.$this->birthDate;
    }
}

$name = trim(fgets(STDIN));
$age = trim(fgets(STDIN));
$id = trim(fgets(STDIN));
$date = trim(fgets(STDIN));

$myCitizen = new Citizen($name, $age, $id, $date);
echo $myCitizen;