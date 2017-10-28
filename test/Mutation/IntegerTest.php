<?php
namespace Braddle\Test\Mutation;

use Braddle\Mutation\Integer;
use PHPUnit\Framework\TestCase;

class IntegerTest extends TestCase
{
    public function testIsGreaterThan_whereNumberIsGreaterThanNumberToCheck()
    {
        $five = new Integer(5);
        $four = new Integer(4);
        $this->assertTrue($five->isGreaterThan($four));
    }

    public function testIsGreaterThan_whereNumberIsNotGreaterThanNumberToCheck()
    {
        $four = new Integer(4);
        $five = new Integer(5);
        $this->assertFalse($four->isGreaterThan($five));
    }
}
