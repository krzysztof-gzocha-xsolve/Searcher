<?php

namespace XSolve\Searcher\Searcher;

use XSolve\Searcher\FilterImposer\Collection\FilterImposerCollectionInterface;
use XSolve\Searcher\Model\FilterModel\Collection\FilterModelCollection;
use Exception;

class Searcher implements SearcherInterface
{
    /**
     * @var FilterImposerCollectionInterface
     */
    private $filterImposerCollection;

    /**
     * @param FilterImposerCollectionInterface $filterImposerCollection
     */
    public function __construct(
        FilterImposerCollectionInterface $filterImposerCollection
    ) {
        $this->filterImposerCollection = $filterImposerCollection;
    }

    /**
     * {@inheritdoc}
     */
    public function imposeOnQueryOrQueryBuilder($queryOrQueryBuilder, FilterModelCollection $filterModelCollection, array $options = [])
    {
        foreach ($filterModelCollection->getFilterModels() as $filterModel) {
            $filterImposer = $this->filterImposerCollection->getSupportingFilterImposer($queryOrQueryBuilder, $filterModel);
            if (!$filterImposer) {
                throw new Exception(sprintf(
                    "Supporting filter imposer not found for query or query builder of class '%s' and filter model of class '%s'.",
                    get_class($queryOrQueryBuilder)
                ));
            }
            $filterImposer->imposeFilter($queryOrQueryBuilder, $filterModel, $options);
        }
    }
}
