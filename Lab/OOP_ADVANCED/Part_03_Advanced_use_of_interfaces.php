<?php

abstract class Computer
{
    public $processor;
    public $ram;
}

abstract class Mobile
{
    public $operator;
    public $canCall;
    public $battery;
}

interface Keyboard
{
    public function pressKey();
    public function changeStatus();
}

interface Mouse
{
    public function click();
    public function move();
}

interface TouchScreen
{
    public function moveFinger();
    public function clickFinger();
    public function writeText();
}

class DesktopComputer extends Computer implements Keyboard, Mouse
{
    private $keyboardConnected;
    
    public function pressKey() {
        
    }
    public function changeStatus() {
        
    }
    public function click() {
        
    }
    public function move() {
        
    }
}

class Laptop extends Computer implements Keyboard, Mouse, TouchScreen
{
    private $battery;
    
    public function pressKey() {
        
    }
    public function changeStatus() {
        
    }
    public function click() {
        
    }
    public function move() {
        
    }
    public function moveFinger() {
        
    }
    public function clickFinger() {
        
    }
    public function writeText() {
        
    }
}

class Tablet extends Mobile implements TouchScreen
{
    private $stdResolution;
    
    public function moveFinger() {
        
    }
    public function clickFinger() {
        
    }
    public function writeText() {
        
    }
}

class MobilePhone extends Mobile implements TouchScreen
{    
    private $size;
    
    public function moveFinger() {
        
    }
    public function clickFinger() {
        
    }
    public function writeText() {
        
    }
}

class Notebook_plus_plus extends Mobile implements TouchScreen, Keyboard, Mouse
{
    public function moveFinger() {
        
    }
    public function clickFinger() {
        
    }
    public function writeText() {
        
    }
    public function pressKey() {
        
    }
    public function changeStatus() {
        
    }
    public function click() {
        
    }
    public function move() {
        
    }
}

$n = new Notebook_plus_plus();