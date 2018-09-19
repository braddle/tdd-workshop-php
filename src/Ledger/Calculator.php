<?php
declare(strict_types=1);

namespace Braddle\Ledger;

class Calculator
{
    public function add(int $a, int $b) : int
    {
        return $a + $b;
    }

    public function subtract(int $a, int $b) : int
    {
        return $a - $b;
    }

    public function multiple(int $a, int $b) : int
    {
        return $a * $b;
    }
}
