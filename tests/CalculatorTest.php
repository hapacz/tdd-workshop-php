<?php

namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    public function test_adds_two_numbers(): void
    {
        $calc = new Calculator();

        $result = $calc->add(2, 3);

        $this->assertSame(5, $result);
    }

    public function test_adds_negative_numbers(): void
    {
        $calc = new Calculator();

        $result = $calc->add(-2, -3);

        $this->assertSame(-5, $result);
    }
}
