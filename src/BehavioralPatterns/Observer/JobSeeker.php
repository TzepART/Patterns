<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Observer;

/**
 * Class JobSeeker
 * @package Patterns\BehavioralPatterns\Observer
 */
class JobSeeker implements ObserverInterface
{
    public function __construct(private string $name)
    {}

    public function onJobPosted(PostInterface $jobPost): void
    {
        echo sprintf('Hi, %s! New job posted: %s', $this->name, $jobPost->getTitle()) . PHP_EOL;
    }
}
