<?php
declare(strict_types=1);

namespace Braddle\Licence;

class Person
{

    private $name;
    private $dateOfBirth;

    public function __construct(string $name, \DateTime $dateOfBirth)
    {

        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getInitials() : string
    {
        $initials = '';

        $names = explode(' ', $this->name);
        foreach ($names as $name) {
            $initials = $initials . $name[0];
        }

        return $initials;
    }

    public function getDateOfBirth(): \DateTime
    {
        return $this->dateOfBirth;
    }
}
