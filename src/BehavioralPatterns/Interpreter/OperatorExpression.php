<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Interpreter;

/**
 * Class OperatorExpression
 * @package Patterns\BehavioralPatterns\Interpreter
 */
abstract class OperatorExpression extends Expression
{

    /**
     * @var null|Expression
     */
    protected $leftOperand = null;

    /**
     * @var null|Expression
     */
    protected $rightOperand = null;

    /**
     * OperatorExpression constructor.
     * @param Expression $leftOperand
     * @param Expression $rightOperand
     */
    public function __construct(Expression $leftOperand, Expression $rightOperand)
    {
        $this->leftOperand = $leftOperand;
        $this->rightOperand = $rightOperand;
    }

    /**
     * @param InterpreterContext $context
     * @return $this|mixed
     */
    public function interpret(InterpreterContext $context)
    {
        $this->leftOperand->interpret($context);
        $this->rightOperand->interpret($context);
        $resultLeft = $context->lookup($this->leftOperand);
        $resultRight = $context->lookup($this->rightOperand);
        $this->doInterpret($context, $resultLeft, $resultRight);
        return $this;
    }

    /**
     * @param InterpreterContext $context
     * @param $resultLeft
     * @param $resultRight
     * @return mixed
     */
    abstract protected function doInterpret(InterpreterContext $context, $resultLeft, $resultRight);
}
