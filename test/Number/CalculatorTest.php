<?php
declare(strict_types=1);

namespace Braddle\Test;

use Braddle\Number\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

    public function testTwoAddTwoReturnsStringFour()
    {
        $result = Calculator::add(2, 2);

        $this->assertEquals("four", $result);
    }

    public function testFiveAddFiveReturnsStringTen()
    {
        $result = Calculator::add(5, 5);

        $this->assertEquals("ten", $result);
    }

    public function testFiveAddFourReturnsStringNine()
    {
        $result = Calculator::add(5, 4);

        $this->assertEquals("nine", $result);
    }

    public function testFourAddFourReturnsStringEight()
    {
        $result = Calculator::add(4, 4);

        $this->assertEquals("eight", $result);
    }

    public function TestFourAddThreeReturnsStringSeven()
    {
        $result = Calculator::add(4, 3);

        $this->assertEquals("seven", $result);
    }

    public function testFourAddTwoReturnsStringSix()
    {
        $result = Calculator::add(4, 2);

        $this->assertEquals("six", $result);
    }

    public function testFourAddOneReturnsStringFive()
    {
        $result = Calculator::add(4, 1);

        $this->assertEquals("five", $result);
    }

    public function testSixAndFiveReturnsCalculatorNotConvertableString()
    {
        $result = Calculator::add(6, 5);

        $this->assertEquals("Cannot convert 11 to a string", $result);
    }

    public function testSixMinusThreeReturnsStringThree()
    {
        $result = Calculator::minus(6, 3);

        $this->assertEquals("three", $result);
    }

    public function testOneMinusOneReturnsStringZero()
    {
        $result = Calculator::minus(1, 1);

        $this->assertEquals("zero", $result);
    }

    public function testThreeMinusOneReturnsStringTwo()
    {
        $result = Calculator::minus(3, 1);

        $this->assertEquals("two", $result);
    }

    public function testTwoMinusOneReturnsStringOne()
    {
        $result = Calculator::minus(2, 1);

        $this->assertEquals("one", $result);
    }

    public function testThreeMinusSixReturnsCalculatorNotConvertableString()
    {
        $result = Calculator::minus(3, 6);

        $this->assertEquals("Cannot convert -3 to a string", $result);
    }
}
