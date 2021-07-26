<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Observer;

interface PostInterface
{
    public function getTitle(): string;
}