<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Memento;

/**
 * Create Class "Memento" where we can save state of editor.
 *
 * Class EditorMemento
 * @package Patterns\BehavioralPatterns\Memento
 */
class EditorMemento
{
    /**
     * @var string
     */
    protected $content;

    /**
     * EditorMemento constructor.
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}
