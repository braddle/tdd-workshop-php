<?php
declare(strict_types=1);

namespace Braddle\Test\Ledger;

use Braddle\Ledger\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /** @var Calculator */
    private $calculator;

    /**
     * @before
     */
    public function initCalculator()
    {
        $this->calculator = new Calculator();
    }

    /**
     * @test
     */
    public function add()
    {
        $this->assertEquals(2, $this->calculator->add(1, 1));
        $this->assertEquals(50, $this->calculator->add(20, 30));
    }

    /**
     * @test
     */
    public function subtract()
    {
        $this->assertEquals(1,$this->calculator->subtract(2, 1));
        $this->assertEquals(25, $this->calculator->subtract(50, 25));
    }

    /**
     * @test
     */
    public function multiply()
    {
        $this->assertEquals(6, $this->calculator->multiple(3, 2));
        $this->assertEquals(77, $this->calculator->multiple(7, 11));
    }
}
