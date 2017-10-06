<?php

class Box
{
    private $length;
    private $width;
    private $height;
    
    public function __construct(float $length, float $width, float $height) {
        $this->length = $this->setLength($length);
        $this->width = $this->setWidth($width);
        $this->height = $this->setHeight($height);
    }
    
    private function setLength($length) {
        if($length <= 0){
            throw new Exception("Length cannot be zero or negative.");
        }
        $this->length = $length;
    }

    private function setWidth($width) {
        if($width <= 0){
            throw new Exception("Width cannot be zero or negative.");
        }
        $this->width = $width;
    }

    private function setHeight($height) {
        if($height <= 0){
            throw new Exception("Height cannot be zero or negative.");
        }
        $this->height = $height;
    }

        
    public function surfaceArea()
    {
        return number_format((2 * $this->length * $this->width) + (2 * $this->length * $this->height) + (2 * $this->width * $this->height), 2, '.', '');
    }
    public function lateralSurfaceArea()
    {
        return number_format((2 * $this->length * $this->height) + (2 * $this->width * $this->height), 2, '.', '');
    }
    public function volume()
    {
        return number_format(($this->length * $this->width * $this->height), 2, '.', '');
    }
}
try {
    $length = trim(fgets(STDIN));
    $width = trim(fgets(STDIN));
    $height = trim(fgets(STDIN));

    $box = new Box($length,$width,$height);

    echo 'Surface Area - '.$box->surfaceArea()."\n";
    echo 'Lateral Surface Area - '.$box->lateralSurfaceArea()."\n";
    echo 'Volume - '.$box->volume()."\n";
} catch (Exception $ex) {
    echo $ex->getMessage();
}