<?php
namespace Braddle;

interface Collection
{
    public function empty() : bool;

    public function size() : int;

    public function push(string $value) : void;

    public function pop(): string;
}
