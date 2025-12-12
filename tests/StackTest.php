<?php

namespace App\Tests;

use App\Stack;
use PHPUnit\Framework\TestCase;
use UnderflowException;

class StackTest extends TestCase
{
    private Stack $stack;

    protected function setUp(): void
    {
        parent::setUp();
        $this->stack = new Stack();
    }

    public function testNewStackIsEmpty(): void
    {
        $this->assertTrue($this->stack->isEmpty());
    }

    public function testAfterOnePushStackIsNotEmpty(): void
    {
        $this->stack->push(0);

        $this->assertFalse($this->stack->isEmpty());
    }

    public function testThrowsUnderflowExceptionWhenEmptyStackIsPopped(): void
    {
        $this->expectException(UnderflowException::class);

        $this->stack->pop();
    }

    public function testAfterOnePushAndOnePopStackIsEmpty(): void
    {
        $this->stack->push(0);
        $this->stack->pop();

        $this->assertTrue($this->stack->isEmpty());
    }

    public function testAfterTwoPushesAndOnePopStackIsNotEmpty(): void
    {
        $this->stack->push(0);
        $this->stack->push(0);
        $this->stack->pop();

        $this->assertFalse($this->stack->isEmpty());
    }

    public function testAfterPushXPopReturnX(): void
    {
        $this->stack->push(99);
        $this->assertSame(99, $this->stack->pop());

        $this->stack->push(88);
        $this->assertSame(88, $this->stack->pop());
    }

    public function testAfterPushXAndYPopReturnYAndX(): void
    {
        $this->stack->push(99);
        $this->stack->push(88);

        $this->assertSame(88, $this->stack->pop());
        $this->assertSame(99, $this->stack->pop());
    }

    // TODO: refactor (i.e. $size), add test ofr peek()
}