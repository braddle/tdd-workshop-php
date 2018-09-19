<?php
namespace Braddle\Test\Number;

use Braddle\Number\Integer;
use PHPUnit\Framework\TestCase;

class IntegerTest extends TestCase
{
    /** @var Integer */
    private $five;

    /** @var Integer */
    private $four;

    /**
     * @before
     */
    public function initInts()
    {
        $this->five = new Integer(5);
        $this->four = new Integer(4);
    }

    /**
     * @test
     */
    public function isGreaterThan()
    {

        $this->assertTrue($this->five->isGreaterThan($this->four));
        $this->assertFalse($this->four->isGreaterThan($this->five));
    }

    /**
     * @test
     */
    public function isLessThan()
    {
        $this->assertTrue($this->four->isLessThan($this->five));
        $this->assertFalse($this->five->isLessThan($this->four));
    }

    /**
     * @test
     */
    public function equals()
    {
        $this->assertTrue($this->four->equals($this->four));
        $this->assertFalse($this->five->equals($this->four));
    }
}
