<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Mediator;

/**
 * Class ChatRoom
 * @package Patterns\BehavioralPatterns\Mediator
 */
class ChatRoom implements ChatRoomMediatorInterface
{
    public function showMessage(UserInterface $user, string $message): void
    {
        $time = date('M d, y H:i');
        $sender = $user->getName();

        echo sprintf('%s[%s]: %s', $time, $sender, $message). PHP_EOL;
    }
}
