<?php

namespace XSolve\Searcher\Searcher;

use XSolve\Searcher\FilterImposer\Collection\FilterImposerCollectionInterface;

class Searcher
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
}
