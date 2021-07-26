<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Interpreter;

/**
 * Class VariableExpression
 * @package Patterns\BehavioralPatterns\Interpreter
 */
class VariableExpression extends AbstractExpression
{
    public function __construct(private string $name, private ?string $value = null)
    {}

    public function interpret(InterpreterContext $context): void
    {
        if (!is_null($this->value)) {
            $context->replace(exp: $this, value: $this->value);
        }
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }

    public function getKey(): string
    {
        return $this->name;
    }
}
