<?php
namespace Braddle\Number;

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

    public function isLessThan(Integer $comparisonValue) : bool
    {
        return $this->value < $comparisonValue->value;
    }

    public function equals(Integer $comparisonValue) : bool
    {
        return $this->value == $comparisonValue->value;
    }
}
