<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 19/07/2018
 * Time: 14:40
 */

namespace Patterns\BehavioralPatterns\Observer;

/*
 * Вкратце
 * Шаблон определяет зависимость между объектами, чтобы при изменении состояния одного из них
 * его «подчинённые» узнавали об этом.
 * Или
 * В шаблоне «Наблюдатель» есть объект («субъект»), ведущий список своих «подчинённых» («наблюдателей») и
 * автоматически уведомляющий их о любом изменении своего состояния, обычно с помощью вызова одного из их методов.
 *
 */

//Example.
//A good example: people looking for work, subscribe to publications on job sites and receive notices
// when there are vacancies that match the parameters.

//Step 1. Create people looking for work, who need to be notified of the appearance of vacancies.
/**
 * Class JobPost
 * @package Patterns\BehavioralPatterns\Observer
 */
class JobPost
{
    /**
     * @var string
     */
    protected $title;

    /**
     * JobPost constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}

/**
 * Interface Observer
 * @package Patterns\BehavioralPatterns\Observer
 */
interface Observer
{
    /**
     * @param JobPost $job
     * @return mixed
     */
    function onJobPosted(JobPost $job);
}

/**
 * Class JobSeeker
 * @package Patterns\BehavioralPatterns\Observer
 */
class JobSeeker implements Observer
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
        echo 'Hi ' . $this->name . '! New job posted: '. $job->getTitle().PHP_EOL;
    }
}

//Step 2. Create publications of vacancies, on which people will subscribe.
/**
 * Interface Observable
 * @package Patterns\BehavioralPatterns\Observer
 */
interface Observable{
    /**
     * @param Observer $observer
     * @return mixed
     */
    public function attach(Observer $observer);

    /**
     * @param JobPost $jobPosting
     * @return mixed
     */
    public function addJob(JobPost $jobPosting);
}

/**
 * Class JobPostings
 * @package Patterns\BehavioralPatterns\Observer
 */
class JobPostings implements Observable
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
     * @param Observer $observer
     * @return mixed|void
     */
    public function attach(Observer $observer)
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

// Using
// Create subscribers
$johnDoe = new JobSeeker('John Doe');
$janeDoe = new JobSeeker('Jane Doe');

// Create publicators and attach subscribers
$jobPostings = new JobPostings();
$jobPostings->attach($johnDoe);
$jobPostings->attach($janeDoe);

// Add new vacations and look who from subscribers get notice
$jobPostings->addJob(new JobPost('Software Engineer'));

// Output
// Hi John Doe! New job posted: Software Engineer
// Hi Jane Doe! New job posted: Software Engineer