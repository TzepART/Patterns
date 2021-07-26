<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Memento;

/**
 * @description Create class Editor, that will be use EditorMemento
 * @package Patterns\BehavioralPatterns\Memento
 */
class Editor implements EditorInterface, EditorTransactionInterface
{
    protected string $content = '';

    public function addContent(string $content)
    {
        $this->content = sprintf('%s %s',$this->content, $content);
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function save(): EditorMementoInterface
    {
        return new EditorMemento(clone $this);
    }

    public function rollback(EditorMementoInterface $memento): void
    {
        $this->content = $memento->getEditor()->getContent();
    }
}
