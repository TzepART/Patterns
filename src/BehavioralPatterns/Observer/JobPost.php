<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Observer;

//Step 1. Create people looking for work, who need to be notified of the appearance of vacancies.

/**
 * Class JobPost
 * @package Patterns\BehavioralPatterns\Observer
 */
class JobPost
{
    /**
     * @var string
     */
    protected $title;

    /**
     * JobPost constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}

