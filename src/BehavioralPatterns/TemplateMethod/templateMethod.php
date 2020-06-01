<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 19/07/2018
 * Time: 15:59
 */

namespace Patterns\BehavioralPatterns\TemplateMethod;

/*
 * Вкратце
 * «Шаблонный метод» определяет каркас выполнения определённого алгоритма, но реализацию самих этапов
 * делегирует дочерним классам.
 * Или
 * «Шаблонный метод» — это поведенческий шаблон, определяющий основу алгоритма и позволяющий наследникам
 * переопределять некоторые шаги алгоритма, не изменяя его структуру в целом.
 */

//Example. Suppose we have a software tool that allows testing, monitoring the quality of the code (lint), performing
// assembly, generating assembly reports (coverage reports, code quality, etc.), and deploying the application
// to a test server.

//Step 1. The first. Our the base class defines the framework of the build algorithm
/**
 * Class Builder
 * @package Patterns\BehavioralPatterns\TemplateMethod
 */
abstract class Builder
{
    // Template Method

    final public function build()
    {
        $this->test();
        $this->lint();
        $this->assemble();
        $this->deploy();
    }

    /**
     * @return mixed
     */
    abstract public function test();

    /**
     * @return mixed
     */
    abstract public function lint();

    /**
     * @return mixed
     */
    abstract public function assemble();

    /**
     * @return mixed
     */
    abstract public function deploy();
}

//Step 2. Now create the implementation
/**
 * Class AndroidBuilder
 * @package Patterns\BehavioralPatterns\TemplateMethod
 */
class AndroidBuilder extends Builder
{
    /**
     * @return mixed|void
     */
    public function test()
    {
        echo 'Running android tests'.PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function lint()
    {
        echo 'Linting the android code'.PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function assemble()
    {
        echo 'Assembling the android build'.PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function deploy()
    {
        echo 'Deploying android build to server'.PHP_EOL;
    }
}

/**
 * Class IosBuilder
 * @package Patterns\BehavioralPatterns\TemplateMethod
 */
class IosBuilder extends Builder
{
    /**
     * @return mixed|void
     */
    public function test()
    {
        echo 'Running ios tests'.PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function lint()
    {
        echo 'Linting the ios code'.PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function assemble()
    {
        echo 'Assembling the ios build'.PHP_EOL;
    }

    /**
     * @return mixed|void
     */
    public function deploy()
    {
        echo 'Deploying ios build to server'.PHP_EOL;
    }
}

//Using
$androidBuilder = new AndroidBuilder();
$androidBuilder->build();

// Output:
//Running android tests
//Linting the android code
//Assembling the android build
//Deploying android build to server

$iosBuilder = new IosBuilder();
$iosBuilder->build();

// Output:
//Running ios tests
//Linting the ios code
//Assembling the ios build
//Deploying ios build to server
