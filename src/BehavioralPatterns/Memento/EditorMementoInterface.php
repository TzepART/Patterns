<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Memento;

/**
 * @package Patterns\BehavioralPatterns\Memento
 */
interface EditorMementoInterface
{
    public function getEditor(): EditorInterface;
}