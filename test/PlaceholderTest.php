<?php
declare(strict_types=1);

namespace Braddle\Test;

use Braddle\Placeholder;
use PHPUnit\Framework\TestCase;

class PlaceholderTest extends TestCase
{

    public function testTrueIsTrue()
    {
        $placeholder = new Placeholder();

        $this->assertTrue($placeholder->getTrue());
    }
}
