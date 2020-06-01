<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Observer;

//Step 2. Create publications of vacancies, on which people will subscribe.

/**
 * Interface Observable
 * @package Patterns\BehavioralPatterns\Observer
 */
interface ObservableInterface
{
    /**
     * @param ObserverInterface $observer
     * @return mixed
     */
    public function attach(ObserverInterface $observer);

    /**
     * @param JobPost $jobPosting
     * @return mixed
     */
    public function addJob(JobPost $jobPosting);
}
