<?php

namespace XSolve\Searcher\Model\FilterModel;

/**
 * Interface FilterModelInterface.
 */
interface FilterModelInterface
{
    /**
     * Returns true if this FilterModel should be taken
     * into consideration when build query.
     *
     * @return bool
     */
    public function isImposed();
}
