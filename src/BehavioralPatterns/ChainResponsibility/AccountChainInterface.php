<?php

declare(strict_types=1);

namespace Patterns\BehavioralPatterns\ChainResponsibility;

/**
 * Class Account
 * @package Patterns\BehavioralPatterns\ChainResponsibility
 */
interface AccountChainInterface
{
    public function getNext(): AccountInterface;
}