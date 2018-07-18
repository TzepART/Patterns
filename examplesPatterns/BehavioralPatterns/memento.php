<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 18/07/2018
 * Time: 15:40
 */

namespace Patterns\BehavioralPatterns\Memento;

/*
 * Вкратце
 * Шаблон «Хранитель» фиксирует и хранит текущее состояние объекта, чтобы оно легко восстанавливалось.
 * Или
 * Шаблон «Хранитель» позволяет восстанавливать объект в его предыдущем состоянии (отмена через откат — undo via rollback).
 * Обычно шаблон применяется, когда нужно реализовать функциональность отмены операции.
 */

//Example. The text editor keeps its state from time to time so that you can restore the text in some kind of past.

//Step 1. Create Class "Memento" where we can save state of editor.
/**
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

//Step 2. Create class Editor, that will be use EditorMemento
/**
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

//Using
$editor = new Editor();

// Write something
$editor->type('This is the first sentence.'.PHP_EOL);
$editor->type('This is second.'.PHP_EOL);

// Save state: This is the first sentence. This is second.
$saved = $editor->save();

// More write...
$editor->type('And this is third.'.PHP_EOL);

// Output: Content before save
echo $editor->getContent(); // This is the first sentence. This is second. And this is third.

// Return the last saved state
$editor->restore($saved);

$editor->getContent(); // This is the first sentence. This is second.