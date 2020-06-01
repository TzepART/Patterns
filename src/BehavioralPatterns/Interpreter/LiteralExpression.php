<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Interpreter;

/**
 * Class LiteralExpression
 * @package Patterns\BehavioralPatterns\Interpreter
 */
class LiteralExpression extends Expression
{
    /**
     * @var null
     */
    private $value = null;

    /**
     * LiteralExpression constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @param InterpreterContext $context
     * @return mixed|void
     */
    public function interpret(InterpreterContext $context)
    {
        $context->replace($this, $this->value);
    }

}
