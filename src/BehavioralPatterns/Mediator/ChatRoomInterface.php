<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Mediator;

/**
 * Class ChatRoom
 * @package Patterns\BehavioralPatterns\Mediator
 */
class ChatRoomInterface implements ChatRoomMediatorInterface
{
    /**
     * @param User $user
     * @param string $message
     * @return mixed|void
     */
    public function showMessage(User $user, string $message)
    {
        $time = date('M d, y H:i');
        $sender = $user->getName();

        echo $time . '[' . $sender . ']:' . $message . PHP_EOL;
    }
}
