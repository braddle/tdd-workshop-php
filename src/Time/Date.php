<?php
declare(strict_types=1);

namespace Braddle\Time;

class Date
{

    public function range(string $startDateString, string $endDateString) : array
    {
        $startDate = \DateTime::createFromFormat('Y-m-d', $startDateString);

        if (!$startDate instanceof \DateTime) {
            throw new TimeException("Start date invalid format");
        }

        $endDate = \DateTime::createFromFormat('Y-m-d', $endDateString);

        if (!$endDate instanceof \DateTime) {
            throw new TimeException("End date invalid format");
        }

        $inverval = $startDate->diff($endDate);
        if (!$inverval || $inverval->days == 0 || $inverval->invert) {
            throw new TimeException("Start date must be before end date");
        }

        $range = [];

        $dayInterval = new \DateInterval("P1D");
        $currentDate = $startDate;

        for ($i = 0; $i <= $inverval->days; $i++) {
            $range[] = $currentDate->format('Y-m-d');
            $currentDate->add($dayInterval);
        }

        return $range;
    }
}
