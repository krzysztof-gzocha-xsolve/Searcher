<?php

namespace XSolve\Searcher\Searcher;

use XSolve\Searcher\Model\FilterModel\Collection\FilterModelCollection;

interface SearcherInterface
{
    /**
     * @param mixed                 $queryOrQueryBuilder
     * @param FilterModelCollection $filterModelCollection
     * @param array                 $options
     *
     * @return mixed
     */
    public function imposeOnQueryOrQueryBuilder($queryOrQueryBuilder, FilterModelCollection $filterModelCollection, array $options = []);
}
