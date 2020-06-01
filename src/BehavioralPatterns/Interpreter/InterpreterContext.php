<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Interpreter;

/**
 * Class InterpreterContext
 * @package Patterns\BehavioralPatterns\Interpreter
 */
class InterpreterContext
{

    /**
     * @var array
     */
    private $expressionStore = [];

    /**
     * @param Expression $exp
     * @param $value
     * @return $this
     */
    public function replace(Expression $exp, $value)
    {
        $this->expressionStore[$exp->getKey()] = $value;
        return $this;
    }

    /**
     * @param Expression $exp
     * @return mixed
     */
    public function lookup(Expression $exp)
    {
        return $this->expressionStore[$exp->getKey()];
    }

}
