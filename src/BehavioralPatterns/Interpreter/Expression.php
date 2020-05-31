<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Interpreter;

//Step 1.

/**
 * Class Expression
 * @package Patterns\BehavioralPatterns\Interpreter
 */
abstract class Expression
{
    /**
     * @var int
     */
    private static $count = 0;

    /**
     * @var null
     */
    private $key = null;

    /**
     * @param InterpreterContext $context
     * @return mixed
     */
    public abstract function interpret(InterpreterContext $context);

    /**
     * @return int|null
     */
    public function getKey()
    {
        if (!isset($this->key)) {
            self::$count++;
            $this->key = self::$count;
        }
        return $this->key;
    }

}
