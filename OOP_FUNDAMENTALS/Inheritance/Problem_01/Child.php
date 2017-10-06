<?php

class Child extends Person
{
    public function setAge(int $age)
    {
        if($age > 15)
        {
            throw new Exception("Child’s age must be less than 16!");
        }
        return parent::setAge($age);
    }
}