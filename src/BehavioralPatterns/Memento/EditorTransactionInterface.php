<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Memento;

/**
 * @package Patterns\BehavioralPatterns\Memento
 */
interface EditorTransactionInterface
{
    public function save(): EditorMementoInterface;
    public function rollback(EditorMementoInterface $memento);
}