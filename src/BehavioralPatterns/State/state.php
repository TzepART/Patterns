<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 19/07/2018
 * Time: 15:40
 */

namespace Patterns\BehavioralPatterns\State;

/*
 * Вкратце
 * Шаблон позволяет менять поведение класса при изменении состояния.
 * Или
 * Шаблон «Состояние» реализует машину состояний объектно ориентированным способом. Это достигается с помощью:
 *  - реализации каждого состояния в виде производного класса интерфейса шаблона «Состояние»,
 *  - реализации переходов состояний (state transitions) посредством вызова методов, определённых вышестоящим классом (superclass).
 *
 * Шаблон «Состояние» — это в некотором плане шаблон «Стратегия», при котором возможно переключение текущей стратегии
 * с помощью вызова методов, определённых в интерфейсе шаблона.
 */

//Example. A text editor changes the state of the text that you type, that is, if a boldface is selected,
// then the editor prints in bold, and so on.

//Step 1. First, we make the state interface and states:
/**
 * Interface WritingState
 * @package Patterns\BehavioralPatterns\State
 */
interface WritingState
{
    /**
     * @param string $words
     * @return mixed
     */
    public function write(string $words);
}

/**
 * Class UpperCase
 * @package Patterns\BehavioralPatterns\State
 */
class UpperCase implements WritingState
{
    /**
     * @param string $words
     * @return mixed|void
     */
    public function write(string $words)
    {
        echo strtoupper($words).PHP_EOL;
    }
}

/**
 * Class LowerCase
 * @package Patterns\BehavioralPatterns\State
 */
class LowerCase implements WritingState
{
    /**
     * @param string $words
     * @return mixed|void
     */
    public function write(string $words)
    {
        echo strtolower($words).PHP_EOL;
    }
}

/**
 * Class DefaultCase
 * @package Patterns\BehavioralPatterns\State
 */
class DefaultCase implements WritingState
{
    /**
     * @param string $words
     * @return mixed|void
     */
    public function write(string $words)
    {
        echo $words.PHP_EOL;
    }
}

//Step 2. Make text editor
/**
 * Class TextEditor
 * @package Patterns\BehavioralPatterns\State
 */
class TextEditor
{
    /**
     * @var WritingState
     */
    protected $state;

    /**
     * TextEditor constructor.
     * @param WritingState $state
     */
    public function __construct(WritingState $state)
    {
        $this->state = $state;
    }

    /**
     * @param WritingState $state
     */
    public function setState(WritingState $state)
    {
        $this->state = $state;
    }

    /**
     * @param string $words
     */
    public function type(string $words)
    {
        $this->state->write($words);
    }
}


//Using
$editor = new TextEditor(new DefaultCase());

$editor->type('First line');

$editor->setState(new UpperCase());

$editor->type('Second line');
$editor->type('Third line');

$editor->setState(new LowerCase());

$editor->type('Fourth line');
$editor->type('Fifth line');

// Output:
// First line
// SECOND LINE
// THIRD LINE
// fourth line
// fifth line