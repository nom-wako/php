<?php
function getTriangleArea($bottom, $height)
{
  echo $bottom * $height / 2;
}
function getSquareArea($width, $height)
{
  echo $width * $height;
}
function getTrapezoidArea($bottom, $top, $height)
{
  echo ($bottom + $top) * $height / 2;
}

echo getTriangleArea(5, 5) . "<br>";
echo getSquareArea(7, 8) . "<br>";
echo getTrapezoidArea(4, 5, 4);
