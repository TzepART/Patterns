<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Interpreter;

/**
 * Class VariableExpression
 * @package Patterns\BehavioralPatterns\Interpreter
 */
class VariableExpression extends Expression
{
    /**
     * @var null
     */
    private $name = null;

    /**
     * @var null
     */
    private $val = null;

    /**
     * VariableExpression constructor.
     * @param $name
     * @param null $val
     */
    public function __construct($name, $val = null)
    {
        $this->name = $name;
        $this->val = $val;
    }

    /**
     * @param InterpreterContext $context
     * @return mixed|void
     */
    public function interpret(InterpreterContext $context)
    {
        if (!is_null($this->val))
            $context->replace($this, $this->val);
    }

    /**
     * @param $value
     */
    public function setValue($value)
    {
        $this->val = $value;
    }

    /**
     * @return int|null
     */
    public function getKey()
    {
        return $this->name;
    }

}
