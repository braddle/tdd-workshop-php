<?php
declare(strict_types=1);

namespace Braddle\Test\Time;

use Braddle\Time\Date;
use Braddle\Time\TimeException;
use PHPUnit\Framework\TestCase;

class DateTest extends TestCase
{
    /**
     * @test
     * @dataProvider getInvalidDateFormats
     */
    public function rangeWithInvalidStartDate(string $startDate)
    {
        $this->expectException(TimeException::class);
        $this->expectExceptionMessage("Start date invalid format");

        $time = new Date();
        $time->range($startDate, '2018-09-20');
    }

    /**
     * @test
     * @dataProvider getInvalidDateFormats
     */
    public function rangeWithInvalidEndDate(string $endDate)
    {
        $this->expectException(TimeException::class);
        $this->expectExceptionMessage("End date invalid format");

        $time = new Date();
        $time->range('2018-09-18', $endDate);
    }

    /**
     * @test
     * @dataProvider getInvalidDateCombinations
     */
    public function rangeWithInvalidStartEndCombinations(string $startDate, string $endDate)
    {
        $this->expectException(TimeException::class);
        $this->expectExceptionMessage("Start date must be before end date");

        $time = new Date();
        $time->range($startDate, $endDate);
    }

    /**
     * @test
     */
    public function range()
    {
        $time = new Date();
        $range = $time->range("2018-09-17", "2018-09-21");

        $this->assertEquals(
          [
              '2018-09-17',
              '2018-09-18',
              '2018-09-19',
              '2018-09-20',
              '2018-09-21',
          ],
          $range
        );
    }

    public function getInvalidDateCombinations()
    {
        return [
          ['2018-09-19', '2018-09-19'],
          ['2018-09-20', '2018-09-19'],
        ];
    }

    public function getInvalidDateFormats() : array
    {
        return [
            ['19/09/2018'],
            ['19-09-2018'],
            ['19/9/2018'],
            ['19/9/18'],
            ['TESTING']
        ];
    }
}
