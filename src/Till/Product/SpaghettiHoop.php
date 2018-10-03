<?php
declare(strict_types=1);

namespace Braddle\Till\Product;

class SpaghettiHoop implements Product
{

    public function getPrice(): int
    {
        return 80;
    }
}
