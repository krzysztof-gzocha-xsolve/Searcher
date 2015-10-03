<?php

namespace XSolve\Searcher\Model\FilterModelCollection;

use XSolve\Searcher\Model\FilterModel\FilterModelInterface;

class FilterModelCollection implements FilterModelCollectionInterface
{
    /**
     * @var FilterModelInterface[]
     */
    private $filterModels;

    /**
     * @param FilterModelInterface[] $filterModels
     */
    public function __construct(array $filterModels)
    {
        foreach ($filterModels as $filterModel) {
            // In this way we will ensure that
            // every element in array has correct type
            $this->addFilterModel($filterModel);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getFilterModels()
    {
        return $this->filterModels;
    }

    /**
     * {@inheritDoc}
     */
    public function addFilterModel(FilterModelInterface $filterModel)
    {
        $this->filterModels[] = $filterModel;

        return $this;
    }
}
