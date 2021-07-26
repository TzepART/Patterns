<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Mediator;

/**
 * @description Create an "Mediator"
 * @package Patterns\BehavioralPatterns\Mediator
 */
interface ChatRoomMediatorInterface
{
    public function showMessage(User $user, string $message): void;
}
