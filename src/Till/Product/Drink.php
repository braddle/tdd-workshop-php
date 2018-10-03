<?php
declare(strict_types=1);

namespace Braddle\Till\Product;

class Drink implements Product
{

    public function getPrice(): int
    {
        return 90;
    }
}
