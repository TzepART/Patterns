<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Interpreter;

/**
 * Class EqualsExpression
 * @package Patterns\BehavioralPatterns\Interpreter
 */
class EqualsExpression extends OperatorExpression
{

    /**
     * @param InterpreterContext $context
     * @param $resultLeft
     * @param $resultRight
     * @return $this|mixed
     */
    protected function doInterpret(InterpreterContext $context, $resultLeft, $resultRight)
    {
        $context->replace($this, $resultLeft == $resultRight);
        return $this;
    }
}
