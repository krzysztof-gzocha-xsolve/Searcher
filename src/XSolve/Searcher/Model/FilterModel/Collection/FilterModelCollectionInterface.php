<?php

namespace XSolve\Searcher\Model\FilterModel\Collection;

use XSolve\Searcher\Model\FilterModel\FilterModelInterface;

/**
 * Interface FilterModelCollectionInterface
 * @package XSolve\Searcher\Model\FilterModelCollection
 */
interface FilterModelCollectionInterface
{
    /**
     * @return FilterModelInterface[]
     */
    public function getFilterModels();

    /**
     * @param FilterModelInterface $filterModel
     *
     * @return FilterModelCollectionInterface
     */
    public function addFilterModel(FilterModelInterface $filterModel);
}
