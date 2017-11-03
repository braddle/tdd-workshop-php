<?php
declare(strict_types=1);

namespace Braddle\Licence;

interface RandomNumberGenerator
{

    function createRandomNumber(int $numberOfDigits) : string;
}
