<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Mediator;

/**
 * @description Create an "Colleague"
 * @package Patterns\BehavioralPatterns\Mediator
 */
class User implements UserInterface
{
    public function __construct(private string $name, private ChatRoomMediatorInterface $chatMediator)
    {}

    public function getName(): string
    {
        return $this->name;
    }

    public function send(string $message): void
    {
        $this->chatMediator->showMessage($this, $message);
    }
}
