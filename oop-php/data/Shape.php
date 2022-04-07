<?php

namespace Data;

class Shape
{
    public function getShapeCorner() : int
    {
        return -10;
    }

}

class Rectangle extends Shape {
    public function getRectangleCorner() : int
    {
        return 3;
    }

    // jika kamu ingin mengakses functiion parentnya kamu bisa menggunakan parent::  dimana dia sama degan super kalau di java

    public function getShapeCornerParent(): int
    {
        return parent::getShapeCorner();
    }
}