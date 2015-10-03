<?php


namespace Model\FilterModel;

use XSolve\Searcher\Model\FilterModel\DateTimeFilterModel;

class DateTimeFilterModelTest extends \PHPUnit_Framework_TestCase
{
    public function testImposedMethodWithoutValue()
    {
        $this->assertFalse($this->getDateTimeFilterModel()->isImposed());
    }

    /**
     * @dataProvider dateTimeProvider
     */
    public function testImposedMethod($value, $expectedResult)
    {
        $this->assertEquals(
            $this->getDateTimeFilterModel()->setDateTime($value)->isImposed(),
            $expectedResult
        );
    }

    /**
     * @return array
     */
    public function dateTimeProvider()
    {
        return [
            [new \DateTime(), true],
            [new \DateTimeImmutable(), true],
            [new SomeCustomDateTime(), true],
        ];
    }

    /**
     * @return DateTimeFilterModel
     */
    private function getDateTimeFilterModel()
    {
        return new DateTimeFilterModel();
    }
}

class SomeCustomDateTime extends \DateTime
{
}
