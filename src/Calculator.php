<?php

namespace App;

class Calculator
{
    public function add(int|float $a, int|float $b): int|float
    {
        return $a + $b;
    }
}