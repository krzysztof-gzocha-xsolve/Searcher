<?php

namespace XSolve\Searcher\Model\FilterModel;

/**
 * Class DateTimeRangeFilterModel.
 */
class DateTimeRangeFilterModel implements FilterModelInterface
{
    /**
     * @var \DateTimeInterface
     */
    private $startingDateTime;

    /**
     * @var \DateTimeInterface
     */
    private $endingDateTime;

    /**
     * @return \DateTimeInterface
     */
    public function getStartingDateTime()
    {
        return $this->startingDateTime;
    }

    /**
     * @param \DateTimeInterface $startingDateTime
     *
     * @return DateTimeRangeFilterModel
     */
    public function setStartingDateTime(\DateTimeInterface $startingDateTime)
    {
        $this->startingDateTime = $startingDateTime;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndingDateTime()
    {
        return $this->endingDateTime;
    }

    /**
     * @param \DateTimeInterface $endingDateTime
     *
     * @return DateTimeRangeFilterModel
     */
    public function setEndingDateTime(\DateTimeInterface $endingDateTime)
    {
        $this->endingDateTime = $endingDateTime;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isImposed()
    {
        return $this->startingDateTime instanceof \DateTimeInterface
            || $this->endingDateTime instanceof \DateTimeInterface;
    }
}
