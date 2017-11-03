<?php
declare(strict_types=1);

namespace Braddle\Licence;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testGetInitials()
    {
        $mark  = new Person("Mark David Bradley", new \DateTime("1997-05-12"));
        $harry = new Person("Harry Jim James Smith", new \DateTime("1985-10-9"));
        $jane  = new Person("Jane Bond", new \DateTime("2001-1-1"));

        $this->assertEquals("MDB", $mark->getInitials());
        $this->assertEquals("HJJS", $harry->getInitials());
        $this->assertEquals("JB", $jane->getInitials());
    }
}
