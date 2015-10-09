<?php

namespace XSolve\Searcher\Model\FilterModel;

/**
 * Class DateTimeFilterModel.
 */
class DateTimeFilterModel implements FilterModelInterface
{
    /**
     * @var \DateTimeInterface
     */
    private $dateTime;

    /**
     * @return \DateTimeInterface
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @param \DateTimeInterface $dateTime
     *
     * @return DateTimeFilterModel
     */
    public function setDateTime(\DateTimeInterface $dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isImposed()
    {
        return $this->dateTime instanceof \DateTimeInterface;
    }
}
