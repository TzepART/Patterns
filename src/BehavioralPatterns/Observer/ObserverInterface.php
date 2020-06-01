<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Observer;

/**
 * Interface Observer
 * @package Patterns\BehavioralPatterns\Observer
 */
interface ObserverInterface
{
    /**
     * @param JobPost $job
     * @return mixed
     */
    function onJobPosted(JobPost $job);
}
