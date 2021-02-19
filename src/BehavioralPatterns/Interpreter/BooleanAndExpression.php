<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Interpreter;

/**
 * Class BooleanAndExpression
 * @package Patterns\BehavioralPatterns\Interpreter
 */
class BooleanAndExpression extends OperatorExpression
{
    /**
     * @param InterpreterContext $context
     * @param $resultLeft
     * @param $resultRight
     * @return $this|mixed
     */
    protected function doInterpret(InterpreterContext $context, $resultLeft, $resultRight)
    {
        $context->replace($this, $resultLeft && $resultRight);
        return $this;
    }
}
