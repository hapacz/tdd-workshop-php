<?php

namespace App;

use UnderflowException;

class Stack
{
    private int $size = 0;
    private array $elements = [];

    public function __construct()
    {
    }

    public function isEmpty(): bool
    {
        return $this->size === 0;
    }

    public function push(int $element): void
    {
        $this->elements[$this->size++] = $element;
    }

    public function pop(): int
    {
        if ($this->isEmpty()) {
            throw new UnderflowException();
        }

        return $this->elements[--$this->size];
    }
}