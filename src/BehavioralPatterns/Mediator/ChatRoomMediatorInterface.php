<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Mediator;

/**
 * Create an "Mediator"
 *
 * Interface ChatRoomMediator
 * @package Patterns\BehavioralPatterns\Mediator
 */
interface ChatRoomMediatorInterface
{
    /**
     * @param User $user
     * @param string $message
     * @return mixed
     */
    public function showMessage(User $user, string $message);
}
