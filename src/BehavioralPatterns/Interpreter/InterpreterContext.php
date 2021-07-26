<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Interpreter;

/**
 * Class InterpreterContext
 * @package Patterns\BehavioralPatterns\Interpreter
 */
class InterpreterContext
{
    private array $expressionStore = [];

    public function replace(AbstractExpression $exp, string|int|bool $value): self
    {
        $this->expressionStore[$exp->getKey()] = $value;

        return $this;
    }

    public function lookup(AbstractExpression $exp): string|int|bool
    {
        return $this->expressionStore[$exp->getKey()];
    }
}
