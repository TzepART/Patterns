<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Interpreter;

/**
 * Class OperatorExpression
 * @package Patterns\BehavioralPatterns\Interpreter
 */
abstract class AbstractOperatorExpression extends AbstractExpression
{
    public function __construct(
        protected AbstractExpression $leftOperand,
        protected AbstractExpression $rightOperand
    ){}

    public function interpret(InterpreterContext $context): void
    {
        $this->leftOperand->interpret($context);
        $this->rightOperand->interpret($context);
        $resultLeft = $context->lookup($this->leftOperand);
        $resultRight = $context->lookup($this->rightOperand);
        $this->doInterpret($context, $resultLeft, $resultRight);
    }

    abstract protected function doInterpret(InterpreterContext $context, string|int|bool $resultLeft, string|int|bool $resultRight): self;
}
