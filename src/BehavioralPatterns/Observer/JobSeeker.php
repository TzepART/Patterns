<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Observer;

/**
 * Class JobSeeker
 * @package Patterns\BehavioralPatterns\Observer
 */
class JobSeeker implements ObserverInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * JobSeeker constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param JobPost $job
     * @return mixed|void
     */
    public function onJobPosted(JobPost $job)
    {
        // Do something with the job posting
        echo 'Hi ' . $this->name . '! New job posted: ' . $job->getTitle() . PHP_EOL;
    }
}
