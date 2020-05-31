<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 18/07/2018
 * Time: 01:40
 */

namespace Patterns\BehavioralPatterns\Interpreter;

/*
 * Интерпретатор (англ. Interpreter) — поведенческий шаблон проектирования, решающий часто встречающуюся,
 * но подверженную изменениям, задачу. Также известен как Little (Small) Language
 */

//Example. The task of searching for lines by pattern can be solved by creating an interpreter that defines
//the grammar of the language.

//Step 1.
/**
 * Class Expression
 * @package Patterns\BehavioralPatterns\Interpreter
 */
abstract class Expression
{
    /**
     * @var int
     */
    private static $count = 0;

    /**
     * @var null
     */
    private $key = null;

    /**
     * @param InterpreterContext $context
     * @return mixed
     */
    public abstract function interpret(InterpreterContext $context);

    /**
     * @return int|null
     */
    public function getKey()
    {
        if (!isset($this->key)) {
            self::$count++;
            $this->key = self::$count;
        }
        return $this->key;
    }

}

//Step 2.
/**
 * Class LiteralExpression
 * @package Patterns\BehavioralPatterns\Interpreter
 */
class LiteralExpression extends Expression
{
    /**
     * @var null
     */
    private $value = null;

    /**
     * LiteralExpression constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @param InterpreterContext $context
     * @return mixed|void
     */
    public function interpret(InterpreterContext $context)
    {
        $context->replace($this, $this->value);
    }

}

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

//Step 3.
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
    protected abstract function doInterpret(InterpreterContext $context, $resultLeft, $resultRight);

}

//Step 4.
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

/**
 * Class BooleanOrExpression
 * @package Patterns\BehavioralPatterns\Interpreter
 */
class BooleanOrExpression extends OperatorExpression
{

    /**
     * @param InterpreterContext $context
     * @param $resultLeft
     * @param $resultRight
     * @return $this|mixed
     */
    protected function doInterpret(InterpreterContext $context, $resultLeft, $resultRight)
    {
        $context->replace($this, $resultLeft || $resultRight);
        return $this;
    }

}

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

//Step 5.
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

//Using
$context = new InterpreterContext();
$input = new VariableExpression('input');
$statement = new BooleanOrExpression(
    new EqualsExpression($input, new LiteralExpression("four")),
    new EqualsExpression($input, new LiteralExpression("4"))
);

foreach (["four", "4", "52"] as $value) {
    $input->setValue($value);
    echo $value . PHP_EOL;
    $statement->interpret($context);
    echo $context->lookup($statement)
        ? "Match"
        : "No match";
}


