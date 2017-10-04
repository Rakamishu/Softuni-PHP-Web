<?php

class Family
{
    public $members = [];
    public $oldest_name;
    public $oldest_age = 0;
    
    public function addMember(Person $person)
    {
        $this->members[] = $person;
    }
    
    public function getOldestMember()
    {
        for($i = 0; $i < count($this->members); $i++)
        {
            if($this->members[$i]->age >= $this->oldest_age)
            {
                $this->oldest_age = $this->members[$i]->age;
                $this->oldest_name = $this->members[$i]->name;
            }
        }
        echo $this->oldest_name.' '.$this->oldest_age;
        
    }
}