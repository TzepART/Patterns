<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Observer;

/**
 * @description Create people looking for work, who need to be notified of the appearance of vacancies.
 * @package Patterns\BehavioralPatterns\Observer
 */
class JobPost implements PostInterface
{
    public function __construct(private string $title)
    {}

    public function getTitle(): string
    {
        return $this->title;
    }
}
