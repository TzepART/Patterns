<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\State;

//Step 2. Make text editor

/**
 * Class TextEditor
 * @package Patterns\BehavioralPatterns\State
 */
class TextEditor
{
    /**
     * @var WritingStateInterface
     */
    protected $state;

    /**
     * TextEditor constructor.
     * @param WritingStateInterface $state
     */
    public function __construct(WritingStateInterface $state)
    {
        $this->state = $state;
    }

    /**
     * @param WritingStateInterface $state
     */
    public function setState(WritingStateInterface $state)
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
