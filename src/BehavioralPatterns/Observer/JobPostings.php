<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Observer;

/**
 * Class JobPostings
 * @package Patterns\BehavioralPatterns\Observer
 */
class JobPostings implements ObservableInterface
{
    /**
     * @var ObserverInterface[]
     */
    protected array $observers = [];

    public function attach(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function addJob(PostInterface $jobPosting): void
    {
        $this->notify($jobPosting);
    }

    protected function notify(PostInterface $jobPosting)
    {
        foreach ($this->observers as $observer) {
            $observer->onJobPosted($jobPosting);
        }
    }
}
