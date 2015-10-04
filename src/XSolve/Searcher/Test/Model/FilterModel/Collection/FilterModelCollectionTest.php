<?php

namespace XSolve\Searcher\Test\Model\FilterModel\Collection;

use XSolve\Searcher\Model\FilterModel\Collection\FilterModelCollection;

class FilterModelCollectionTest extends \PHPUnit_Framework_TestCase
{
    const NUMBER_OF_FILTER_MODELS = 5;

    public function testConstructor()
    {
        $filterModels = [];

        for ($i = 1; $i <= self::NUMBER_OF_FILTER_MODELS; $i++) {
            $filterModels[] = $this->getFilterModel();
        }

        $filterModelCollection = new FilterModelCollection($filterModels);

        $this->assertCount(self::NUMBER_OF_FILTER_MODELS, $filterModelCollection->getFilterModels());
    }

    /**
     * @return \XSolve\Searcher\Model\FilterModel\FilterModelInterface
     */
    private function getFilterModel()
    {
        return $this
            ->getMockBuilder('\XSolve\Searcher\Model\FilterModel\FilterModelInterface')
            ->disableOriginalConstructor()
            ->getMock();
    }
}

