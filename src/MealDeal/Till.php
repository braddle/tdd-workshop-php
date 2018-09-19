<?php
namespace Braddle\MealDeal;

interface Till
{
    public function addProduct(string $type) : void;
    public function getTotal(): int;
}
