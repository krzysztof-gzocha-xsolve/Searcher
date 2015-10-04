<?php

namespace XSolve\Searcher\FilterImposer;

use XSolve\Searcher\Model\FilterModel\FilterModelInterface;

interface FilterImposerInterface
{
    /**
     * Will impose conditions with values taken from FilterModel.
     * @param FilterModelInterface $filterModel
     */
    public function imposeFilter(FilterModelInterface $filterModel);

    /**
     * Will return true if this FilterImposer supports specific FilterModel.
     * @param FilterModelInterface $filterModel
     *
     * @return bool
     */
    public function supports(FilterModelInterface $filterModel);
}
