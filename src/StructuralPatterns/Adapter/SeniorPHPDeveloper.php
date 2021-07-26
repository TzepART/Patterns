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
        echo 'I use SOLID sometimes...'.PHP_EOL;
    }

    public function tuneCI(): void
    {
        echo 'I config CI/CD every day! (no)'.PHP_EOL;
    }
}
