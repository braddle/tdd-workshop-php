<?php
declare(strict_types=1);

namespace Braddle\Set;

class Set
{
    private $isEmpty;
    private $size;
    private $data;

    public function __construct(int $size = 10)
    {
        $this->isEmpty = true;
        $this->size = 0;
        $this->data = new \SplFixedArray($size);
    }

    public function IsEmpty() : bool
    {
        return $this->isEmpty;
    }

    public function size() : int
    {
        return $this->size;
    }

    public function add(string $value)
    {
        if ($this->size == count($this->data)) {
            $this->data->setSize(count($this->data) + 1);
        }
        for ($i = 0; $i < $this->size; $i++) {
            if ($this->data[$i] == $value) {
                return;
            }
        }

        $this->data[$this->size] = $value;
        $this->isEmpty = false;
        $this->size ++;
    }

    public function contains(string $value) : bool
    {
        for ($i = 0; $i < $this->size; $i++) {
            if ($this->data[$i] == $value) {
                return true;
            }
        }

        return false;
    }

    public function remove(string $value)
    {
        for ($i = 0; $i < $this->size; $i++) {
            if ($this->data[$i] == $value) {
                $this->data[$i] = $this->data[$this->size - 1];
                $this->data[$this->size - 1] = null;
            }
        }

        $this->size --;
        if ($this->size == 0) {
            $this->isEmpty = true;
        }
    }
}
