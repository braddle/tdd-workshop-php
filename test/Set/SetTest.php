<?php
declare(strict_types=1);

namespace Braddle\Test\Set;

use Braddle\Set\Set;
use PHPUnit\Framework\TestCase;

class SetTest extends TestCase
{

    public function testIsEmpty()
    {
        $empty = new Set();

        $this->assertTrue($empty->isEmpty());

        $one = new Set();
        $one->add("one");

        $this->assertFalse($one->isEmpty());
    }

    public function testSize()
    {
        $empty = new Set();

        $this->assertSame(0, $empty->size());

        $one = new Set();
        $one->add("one");

        $this->assertSame(1, $one->size());

        $many = new Set();
        $many->add("one");
        $many->add("two");

        $this->assertGreaterThan(1, $many->size());
    }

    public function testContains()
    {
        $empty = new Set();

        $this->assertFalse($empty->contains("one"));

        $one = new Set();
        $one->add("one");

        $this->assertTrue($one->contains("one"));
    }

    public function testNoDuplicateValues()
    {
        $one = new Set();
        $one->add("one");
        $one->add("one");

        $this->assertEquals(1, $one->size());
    }

    public function testRemove()
    {
        $one = new Set();
        $one->add("one");
        $one->remove("one");

        $this->assertTrue($one->IsEmpty());
        $this->assertEquals(0, $one->size());

        $cereal = new Set();
        $cereal->add("snap");
        $cereal->add("crackle");
        $cereal->add("pop");

        $cereal->remove("crackle");

        $this->assertEquals(2, $cereal->size());
        $this->assertFalse($cereal->contains("crackle"));
        $this->assertTrue($cereal->contains("snap"));
        $this->assertTrue($cereal->contains("pop"));
    }

    public function testGrow()
    {
        $two = new Set(1);
        $two->add("one");
        $two->add("two");

        $this->assertEquals(2, $two->size());
    }
}
