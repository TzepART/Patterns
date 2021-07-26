<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Observer;

/**
 * Interface Observer
 * @package Patterns\BehavioralPatterns\Observer
 */
interface ObserverInterface
{
    public function onJobPosted(PostInterface $jobPost);
}
