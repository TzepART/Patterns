<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Command;

/**
 * Invoker
 *
 * Class RemoteControl
 * @package Patterns\BehavioralPatterns\Command
 */
class RemoteControl
{
    public function submit(CommandInterface $command): void
    {
        $command->execute();
    }
}
