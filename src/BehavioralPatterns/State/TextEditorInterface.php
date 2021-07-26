<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\State;

/**
 * @package Patterns\BehavioralPatterns\State
 */
interface TextEditorInterface
{
    public function setState(WritingStateInterface $state): void;
    public function type(string $words);
}