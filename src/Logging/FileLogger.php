<?php
declare(strict_types=1);

namespace Braddle\Logging;

class FileLogger implements Logging
{
    private $file;

    public function __construct(\SplFileObject $file)
    {
        $this->file = $file;
    }

    public function info(string $message) : void
    {
        $this->file->fwrite($message);
        $this->file->fflush();
    }
}
