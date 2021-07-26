<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Memento;

/**
 * @package Patterns\BehavioralPatterns\Memento
 */
interface EditorInterface
{
    public function addContent(string $content);
    public function getContent(): string;
}