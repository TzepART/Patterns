<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Command;

/**
 * Interface Command
 * @package Patterns\BehavioralPatterns\Command
 */
interface CommandInterface
{
    /**
     * @return mixed
     */
    public function execute();

    /**
     * @return mixed
     */
    public function undo();

    /**
     * @return mixed
     */
    public function redo();
}
