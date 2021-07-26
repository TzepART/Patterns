<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Interpreter;

/**
 * Class LiteralExpression
 * @package Patterns\BehavioralPatterns\Interpreter
 */
class LiteralExpression extends AbstractExpression
{
    public function __construct(private string $value)
    {}

    public function interpret(InterpreterContext $context): void
    {
        $context->replace($this, $this->value);
    }
}
