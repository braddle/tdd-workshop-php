<?php
declare(strict_types=1);

namespace Braddle\Till\Product;

class Crisps implements Product
{

    public function getPrice(): int
    {
        return 50;
    }
}
