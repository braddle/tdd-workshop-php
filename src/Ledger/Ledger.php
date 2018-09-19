<?php
namespace Braddle\Ledger;

interface Ledger
{
    public function calculate(string $sum) : int;
}
