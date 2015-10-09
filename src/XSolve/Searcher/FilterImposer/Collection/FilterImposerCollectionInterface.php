<?php

namespace XSolve\Searcher\FilterImposer\Collection;

use XSolve\Searcher\FilterImposer\FilterImposerInterface;
use XSolve\Searcher\Model\FilterModel\FilterModelInterface;

interface FilterImposerCollectionInterface
{
    /**
     * @param FilterImposerInterface $filterImposer
     *
     * @return FilterImposerCollectionInterface
     */
    public function addFilterImposer(FilterImposerInterface $filterImposer);

    /**
     * @return FilterImposerInterface[]
     */
    public function getFilterImposers();

    /**
     * @param mixed                $queryOrQueryBuilder
     * @param FilterModelInterface $filterModel
     *
     * @return FilterImposerInterface|null
     */
    public function getSupportingFilterImposer($queryOrQueryBuilder, FilterModelInterface $filterModel);
}
