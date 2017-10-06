<?php

class Book
{
    protected $title;
    protected $author;
    protected $price;
    protected $type;
    
    public function __construct(string $title, string $author, $price, string $type) {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);
        $this->setType($type);
    }
    
    protected function setTitle($title) {
        if(strlen($title) < 3)
        {
            throw new Exception("Title not valid!");
        }
        $this->title = $title;
    }

    protected function setAuthor($author) {
        $fname = explode(" ", $author);
        $letters = str_split($fname[1]);
        if(preg_match("/[0-9]/", $letters[0]))
        {
            throw new Exception("Author not valid!");
        }
        $this->author = $author;
    }

    protected function setPrice($price) {
        if($price <= 0)
        {
            throw new Exception("Price not valid!");
        }
        $this->price = $price;
    }
    
    protected function setType($type) {
        $allowedTypes = ["GOLD", "STANDARD"];
        if(!in_array($type, $allowedTypes))
        {
            throw new Exception("Type is not valid!");
        }
        $this->type = $type;
    }
    
    public function getPrice()
    {
        return $this->price;
    }

    public function printResult()
    {
        return "OK\n".$this->getPrice();
    }
    
}
