<?php

namespace XSolve\Searcher\Test\FilterImposer\Collection;

use XSolve\Searcher\FilterImposer\Collection\FilterImposerCollection;

class FilterImposerCollectionTest extends \PHPUnit_Framework_TestCase
{
    const NUMBER_OF_FILTER_IMPOSERS = 5;

    public function testConstructor()
    {
        $filterImposers = [];

        for ($i = 1; $i <= self::NUMBER_OF_FILTER_IMPOSERS; $i++) {
            $filterImposers[] = $this->getFilterImposer();
        }

        $filterCollection = new FilterImposerCollection($filterImposers);

        $this->assertCount(self::NUMBER_OF_FILTER_IMPOSERS, $filterCollection->getFilterImposers());
    }

    /**
     * @return \XSolve\Searcher\FilterImposer\FilterImposerInterface
     */
    private function getFilterImposer()
    {
        return $this
            ->getMockBuilder('\XSolve\Searcher\FilterImposer\FilterImposerInterface')
            ->disableOriginalConstructor()
            ->getMock();
    }
}

