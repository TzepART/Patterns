<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\TemplateMethod;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        /**
         * Example.
         * Suppose we have a software tool that allows testing, monitoring the quality of the code (lint), performing
         * assembly, generating assembly reports (coverage reports, code quality, etc.), and deploying the application
         * to a test server.
         */


        /**
         * Output:
         * Running android tests
         * Linting the android code
         * Assembling the android build
         * Deploying android build to server
         */
        $androidBuilder = new AndroidAbstractBuilder();
        $androidBuilder->build();


        /**
         * Output:
         * Running ios tests
         * Linting the ios code
         * Assembling the ios build
         * Deploying ios build to server
         */
        $iosBuilder = new IosAbstractBuilder();
        $iosBuilder->build();
    }
}
