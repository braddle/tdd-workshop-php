<?php
declare(strict_types=1);

namespace Braddle\Till\Product;

class BakedBeans implements Product
{

    public function getPrice(): int
    {
        return 75;
    }
}
