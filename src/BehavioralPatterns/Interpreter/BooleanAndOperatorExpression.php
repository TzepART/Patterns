<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Interpreter;

/**
 * Class BooleanAndExpression
 * @package Patterns\BehavioralPatterns\Interpreter
 */
class BooleanAndOperatorExpression extends AbstractOperatorExpression
{
    protected function doInterpret(InterpreterContext $context, string|int|bool $resultLeft, string|int|bool $resultRight): self
    {
        $context->replace($this, $resultLeft && $resultRight);

        return $this;
    }
}
