<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Observer;

/**
 * @description Create publications of vacancies, on which people will subscribe.
 * @package Patterns\BehavioralPatterns\Observer
 */
interface ObservableInterface
{
    public function attach(ObserverInterface $observer): void;
    public function addJob(PostInterface $jobPosting): void;
}
