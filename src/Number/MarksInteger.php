<?php

interface MarksInteger
{
    public function isEqualTo(MarksInteger $int) : bool;

    public function isGreaterThan(MarksInteger $int) : bool;

    public function isLessThan(MarksInteger $int) : bool;

    public function add(MarksInteger $int) : MarksInterger;

    public function minus(MarksInteger $int) : MarksInterger;

    public function divide(MarksInteger $int) : MarksInterger;

    public function multiple(MarksInteger $int) : MarksInterger;
}
