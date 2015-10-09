<?php

namespace XSolve\Searcher\FilterImposer\Collection;

use XSolve\Searcher\FilterImposer\FilterImposerInterface;
use XSolve\Searcher\Model\FilterModel\FilterModelInterface;
use Exception;

class FilterImposerCollection implements FilterImposerCollectionInterface
{
    /**
     * @var FilterImposerInterface[]
     */
    private $filterImposers;

    /**
     * @param FilterImposerInterface[] $filterImposers
     */
    public function __construct(array $filterImposers)
    {
        $this->filterImposers = [];
        foreach ($filterImposers as $filterImposer) {
            // In this way we will ensure that
            // every element in array has correct type
            $this->addFilterImposer($filterImposer);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addFilterImposer(FilterImposerInterface $filterImposer)
    {
        $this->filterImposers[] = $filterImposer;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilterImposers()
    {
        return $this->filterImposers;
    }

    /**
     * {@inheritdoc}
     */
    public function getSupportingFilterImposer($queryOrQueryBuilder, FilterModelInterface $filterModel)
    {
        $supportingFilterImposers = array_filter(
            $this->filterImposers,
            function (FilterImposerInterface $filterImposer) use ($queryOrQueryBuilder, $filterModel) {
                return $filterImposer->supports($queryOrQueryBuilder, $filterModel);
            }
        );
        if (count($supportingFilterImposers) > 1) {
            throw new Exception(sprintf(
                "More than one imposer found for filter model of class '%s'",
                get_class($filterModel)
            ));
        }

        return $supportingFilterImposers ? reset($supportingFilterImposers) : null;
    }
}
