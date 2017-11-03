<?php
declare(strict_types=1);

namespace Braddle\Licence;

use PHPUnit\Framework\TestCase;

class DrivingLicenceNumberFactoryTest extends TestCase
{
    public function testGenerate()
    {
        $mark  = new Person("Mark David Bradley", new \DateTime('1997-05-12'));
        $harry = new Person("Harry Jim James Smith", new \DateTime('1985-10-09'));
        $jane  = new Person("Jane Bond", new \DateTime('1999-01-01'));

        // Month appears to be off by one!!
        $markDrivingLicenceNumber  = "MDB19970512999";
        $harryDrivingLicenceNumber = "HJJS19851009999";
        $janeDrivingLicenceNumber  = "JB19990101999";



        $factory = new DrivingLicenceNumberFactory($stubRandomNumberGenerator);

        $this->assertEquals($markDrivingLicenceNumber, $factory->generate($mark));
        $this->assertEquals($harryDrivingLicenceNumber, $factory->generate($harry));
        $this->assertEquals($janeDrivingLicenceNumber, $factory->generate($jane));
    }
}
