<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Adapter;

/**
 * Create adapter around SeniorDeveloper
 *
 * Class RabbitAdapter
 * @package Patterns\StructuralPatterns\Adapter
 */
class SeniorDeveloperAdapter implements TeamLeadInterface
{
    public function __construct(private SeniorDeveloperInterface $developer){}

    public function lead(): void
    {
        echo '- I do not know how work with people. But, ';
        $this->developer->useSOLID();
    }

    public function plan(): void
    {
        echo '- I know about Trello and Jira. But also, ';
        $this->developer->tuneCI();
    }
}
