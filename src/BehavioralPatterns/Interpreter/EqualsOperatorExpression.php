<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Interpreter;

/**
 * Class EqualsExpression
 * @package Patterns\BehavioralPatterns\Interpreter
 */
class EqualsOperatorExpression extends AbstractOperatorExpression
{
    protected function doInterpret(InterpreterContext $context, string|int|bool $resultLeft, string|int|bool $resultRight): self
    {
        $context->replace($this, $resultLeft == $resultRight);

        return $this;
    }
}
