<?php
declare(strict_types=1);

namespace Braddle\Logging;

interface Logging
{
    public function info(string $message) : void;
}
