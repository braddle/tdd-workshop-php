<?php
declare(strict_types=1);

namespace Braddle\Licence;

class DrivingLicenceNumberFactory
{

    private $randomNumberGenerator;

    public function __construct(RandomNumberGenerator $randomNumberGenerator)
    {
        $this->randomNumberGenerator = $randomNumberGenerator;
    }

    public function generate(Person $person)
    {
        return $person->getInitials() . $person->getDateOfBirth()->format('Ymd') . $this->randomNumberGenerator->createRandomNumber(3);
    }
}
