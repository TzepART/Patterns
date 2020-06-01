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
     * @var array
     */
    protected $observers = [];

    /**
     * @param JobPost $jobPosting
     */
    protected function notify(JobPost $jobPosting)
    {
        foreach ($this->observers as $observer) {
            $observer->onJobPosted($jobPosting);
        }
    }

    /**
     * @param ObserverInterface $observer
     * @return mixed|void
     */
    public function attach(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * @param JobPost $jobPosting
     * @return mixed|void
     */
    public function addJob(JobPost $jobPosting)
    {
        $this->notify($jobPosting);
    }
}
