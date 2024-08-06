<?php
function triangleArea($base, $height)
{
    return $base * $height / 2;
}
function squareArea($base, $height)
{
    return $base * $height;
}
function trapezoidArea($upperBase,$lowerBase, $height)
{
    return ($upperBase + $lowerBase) * $height / 2;
    
}

echo triangleArea(5, 5) . "\n";
echo squareArea(7, 8) . "\n";
echo trapezoidArea(4, 5, 4);

