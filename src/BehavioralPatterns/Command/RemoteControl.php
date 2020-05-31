<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Command;

// Invoker
/**
 * Class RemoteControl
 * @package Patterns\BehavioralPatterns\Command
 */
class RemoteControl
{
    /**
     * @param CommandInterface $command
     */
    public function submit(CommandInterface $command)
    {
        $command->execute();
    }
}
