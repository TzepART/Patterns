<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Adapter;

/**
 * Class SeniorPHPDeveloper
 * @package Patterns\StructuralPatterns\Adapter
 */
class SeniorPHPDeveloper implements SeniorDeveloperInterface
{
    public function useSOLID(): void
    {
        echo 'I am doing it sometimes...'.PHP_EOL;
    }

    public function tuneCI(): void
    {
        echo 'Of course, I do it every day! (no)'.PHP_EOL;
    }
}
