<?php
namespace Braddle\Mutation;

class Integer
{
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }
    public function isGreaterThan(Integer $comparisonValue) : bool
    {
        return $this->value > $comparisonValue->value;
    }
}
