<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\State;

/**
 * @package Patterns\BehavioralPatterns\State
 */
class TextEditor implements TextEditorInterface
{
    public function __construct(private WritingStateInterface $state)
    {}

    public function setState(WritingStateInterface $state): void
    {
        $this->state = $state;
    }

    public function type(string $words)
    {
        $this->state->write($words);
    }
}
