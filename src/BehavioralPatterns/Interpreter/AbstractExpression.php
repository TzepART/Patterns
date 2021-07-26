<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Interpreter;

/**
 * Class Expression
 * @package Patterns\BehavioralPatterns\Interpreter
 */
abstract class AbstractExpression
{
    private static int $count = 0;
    private ?string $key = null;

    abstract public function interpret(InterpreterContext $context): void;

    public function getKey():? string
    {
        if (!isset($this->key)) {
            self::$count++;
            $this->key = (string) self::$count;
        }

        return $this->key;
    }
}
