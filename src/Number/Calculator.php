<?php
declare(strict_types=1);

namespace Braddle\Number;

class Calculator
{
    public static function add(int $a, int $b) : string
    {
        $result = $a + $b;

        switch ($result) {
            case 4:
                return 'four';
                break;
            case 5:
                return 'five';
                break;
            case 6:
                return 'six';
                break;
            case 8:
                return 'eight';
                break;
            case 9:
                return 'nine';
                break;
            case 10:
                return 'ten';
                break;
            default:
                return 'Cannot convert ' . $result . ' to a string';
                break;
        }
    }

    public static function minus(int $a, int $b) : string
    {
        $result = $a - $b;

        switch ($result) {
            case 0:
                return 'zero';
                break;
            case 1:
                return 'one';
                break;
            case 2:
                return 'two';
                break;
            case 3:
                return 'three';
                break;
            default:
                return 'Cannot convert ' . $result . ' to a string';
                break;
        }
    }
}
