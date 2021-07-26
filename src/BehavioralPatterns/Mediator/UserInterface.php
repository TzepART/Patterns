<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Mediator;

/**
 * @package Patterns\BehavioralPatterns\Mediator
 */
interface UserInterface
{
    public function getName(): string;
    public function send(string $message): void;
}