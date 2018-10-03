<?php
declare(strict_types=1);

namespace Braddle\Test\Logging;

use Braddle\Logging\FileLogger;
use Mockery\Adapter\Phpunit\MockeryTestCase;

class FileLoggerTest extends MockeryTestCase
{
    private $message = 'Something happen';

    /**
     * @test
     */
    public function writeInfoToFileLondon()
    {
        /** @var \Mockery\Mock $file */
        $file = \Mockery::mock(\SplFileObject::class, ['/dev/null']);
        $file->shouldReceive('fwrite')->once()->with($this->message);
        $file->shouldReceive("fflush")->once();

        $fileLogger = new FileLogger($file);
        $fileLogger->info($this->message);
    }

    /**
     * @test
     */
    public function writeInfoToFileChicago()
    {
        $path = __DIR__ . '/test.log';

        exec("rm " . $path);
        exec("touch ". $path);

        $file = new \SplFileObject($path,"w");

        $fileLogger = new FileLogger($file);
        $fileLogger->info($this->message);

        $actualMessage = exec("cat " . $path);

        $this->assertEquals($this->message, $actualMessage);
    }

}
