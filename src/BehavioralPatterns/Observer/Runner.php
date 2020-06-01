<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Observer;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        /**
         * Example.
         * A good example: people looking for work, subscribe to publications on job sites and receive notices
         * when there are vacancies that match the parameters.
         */

        /*
         * Create subscribers
         */
        $johnDoe = new JobSeeker('John Doe');
        $janeDoe = new JobSeeker('Jane Doe');

        /*
         * Create publicators and attach subscribers
         */
        $jobPostings = new JobPostings();
        $jobPostings->attach($johnDoe);
        $jobPostings->attach($janeDoe);

        /*
         * Add new vacations and look who from subscribers get notice
         */
        $jobPostings->addJob(new JobPost('Software Engineer'));

        /**
         * Output
         * Hi John Doe! New job posted: Software Engineer
         * Hi Jane Doe! New job posted: Software Engineer
         */
    }
}
