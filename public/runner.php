#!/usr/bin/env php
<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$patternType = $argv[1] ?? '';
$patternName = $argv[2] ?? '';

use Patterns\BehavioralPatterns;
use Patterns\CreationalPatterns;
use Patterns\StructuralPatterns;

$runnerName = sprintf('Patterns\\%s\\%s\\Runner', $patternType, $patternName);

if (class_exists($runnerName)) {
    $runnerName::using();
}
