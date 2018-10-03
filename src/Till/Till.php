<?php
namespace Braddle\Till;

use Braddle\Till\Product\Product;

interface Till
{
    public function addProduct(Product $product) : void;
    public function getTotal(): int;
}
