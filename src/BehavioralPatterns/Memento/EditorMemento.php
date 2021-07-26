<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Memento;

/**
 * @description Create Class "Memento" where we can save state of editor.
 * @package Patterns\BehavioralPatterns\Memento
 */
class EditorMemento implements EditorMementoInterface
{
    public function __construct(private EditorInterface $editor)
    {}

    public function getEditor(): EditorInterface
    {
        return $this->editor;
    }
}
