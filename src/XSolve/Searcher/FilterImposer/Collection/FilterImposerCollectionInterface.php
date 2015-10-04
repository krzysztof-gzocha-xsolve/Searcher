<?php
namespace XSolve\Searcher\FilterImposer\Collection;

use XSolve\Searcher\FilterImposer\FilterImposerInterface;

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
}
