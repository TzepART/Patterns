<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Command;

/**
 * @package Patterns\BehavioralPatterns\Command
 */
interface CommandInterface
{
    public function execute(): void;
    public function undo(): void;
    public function redo(): void;
}
