<?php

class Circle
{
    public $x, $y;
    public $r;
    function __construct($x, $y, $r)
    {
        $this->x = $x;
        $this->y = $y;
        $this->r = $r;
    }

    function intersect(Circle $c)
    {
        $distSq = ($this->x - $c->x) * ($this->x - $c->x)
            + ($this->y - $c->y) * ($this->y - $c->y);
        $radSumSq = ($this->r + $c->r) * ($this->r + $c->r);
        if ($distSq == $radSumSq)
            return 1;
        else if ($distSq > $radSumSq)
            return -1;
        else
            return 0;
    }
}

$circle1 = new Circle(-10, 8, 30);
$circle2 = new Circle(14, -24, 10);
$t = $circle1->intersect($circle2);

if ($t == 1)
    echo "Circle touch to each other.";
else if ($t < 0)
    echo "Circle not touch to each other.";
else
    echo "Circle intersect to each other.";
