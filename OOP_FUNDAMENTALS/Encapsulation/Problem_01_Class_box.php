<?php

class Box
{
    private $length;
    private $width;
    private $height;
    
    public function __construct(float $length, float $width, float $height) {
        $this->length = $length;
        $this->width = $width;
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

$length = trim(fgets(STDIN));
$width = trim(fgets(STDIN));
$height = trim(fgets(STDIN));

$box = new Box($length,$width,$height);


echo 'Surface Area - '.$box->surfaceArea()."\n";
echo 'Lateral Surface Area - '.$box->lateralSurfaceArea()."\n";
echo 'Volume - '.$box->volume()."\n";