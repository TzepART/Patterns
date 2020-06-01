<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Memento;

/**
 * Create class Editor, that will be use EditorMemento
 *
 * Class Editor
 * @package Patterns\BehavioralPatterns\Memento
 */
class Editor
{
    /**
     * @var string
     */
    protected $content = '';

    /**
     * @param string $words
     */
    public function type(string $words)
    {
        $this->content = $this->content . ' ' . $words;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return EditorMemento
     */
    public function save()
    {
        return new EditorMemento($this->content);
    }

    /**
     * @param EditorMemento $memento
     */
    public function restore(EditorMemento $memento)
    {
        $this->content = $memento->getContent();
    }
}
