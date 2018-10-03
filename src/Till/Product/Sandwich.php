<?php

namespace Braddle\Till\Product;

class Sandwich implements Product
{

    public function getPrice(): int
    {
        return 200;
    }
}
