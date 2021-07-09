<?php

class Rectangle
{
    public $width;
    public $height;
    public function __construct()
    {
        $this->width = 10;
        $this->height = 20;
    }

    public function get_perimeter()
    {
        return 2 * ($this->width + $this->height);
    }

    public function get_area()
    {
        return $this->width * $this->height;
    }
}

$a = new Rectangle();

// $a->width = 5;
echo $a->get_area() . "<br>";
echo $a->get_perimeter();
