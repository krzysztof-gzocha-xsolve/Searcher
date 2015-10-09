<?php

namespace XSolve\Searcher\FilterImposer;

use XSolve\Searcher\Model\FilterModel\FilterModelInterface;

interface FilterImposerInterface
{
    /**
     * Will impose conditions with values taken from FilterModel.
     *
     * @param mixed                $queryOrQueryBuilder
     * @param FilterModelInterface $filterModel
     * @param array                $options
     */
    public function imposeFilter($queryOrQueryBuilder, FilterModelInterface $filterModel, array $options = []);

    /**
     * Will return true if this FilterImposer supports specific FilterModel.
     *
     * @param mixed                $queryOrQueryBuilder
     * @param FilterModelInterface $filterModel
     *
     * @return bool
     */
    public function supports($queryOrQueryBuilder, FilterModelInterface $filterModel);
}
