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
abstract class Expression
{

    private static $count = 0;

    private $key = null;

    public abstract function interpret(InterpreterContext $context);

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
class LiteralExpression extends Expression
{
    private $value = null;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function interpret(InterpreterContext $context)
    {
        $context->replace($this, $this->value);
    }

}

class VariableExpression extends Expression
{

    private $name = null;

    private $val = null;

    public function __construct($name, $val = null)
    {
        $this->name = $name;
        $this->val = $val;
    }

    public function interpret(InterpreterContext $context)
    {
        if (!is_null($this->val))
            $context->replace($this, $this->val);
    }

    public function setValue($value)
    {
        $this->val = $value;
    }

    public function getKey()
    {
        return $this->name;
    }

}

//Step 3.
abstract class OperatorExpression extends Expression
{

    protected $leftOperand = null;

    protected $rightOperand = null;

    public function __construct(Expression $leftOperand, Expression $rightOperand)
    {
        $this->leftOperand = $leftOperand;
        $this->rightOperand = $rightOperand;
    }

    public function interpret(InterpreterContext $context)
    {
        $this->leftOperand->interpret($context);
        $this->rightOperand->interpret($context);
        $resultLeft = $context->lookup($this->leftOperand);
        $resultRight = $context->lookup($this->rightOperand);
        $this->doInterpret($context, $resultLeft, $resultRight);
        return $this;
    }

    protected abstract function doInterpret(InterpreterContext $context, $resultLeft, $resultRight);

}

//Step 4.
class EqualsExpression extends OperatorExpression
{

    protected function doInterpret(InterpreterContext $context, $resultLeft, $resultRight)
    {
        $context->replace($this, $resultLeft == $resultRight);
        return $this;
    }

}

class BooleanOrExpression extends OperatorExpression
{

    protected function doInterpret(InterpreterContext $context, $resultLeft, $resultRight)
    {
        $context->replace($this, $resultLeft || $resultRight);
        return $this;
    }

}

class BooleanAndExpression extends OperatorExpression
{

    protected function doInterpret(InterpreterContext $context, $resultLeft, $resultRight)
    {
        $context->replace($this, $resultLeft && $resultRight);
        return $this;
    }

}

//Step 5.
class InterpreterContext
{

    private $expressionStore = [];

    public function replace(Expression $exp, $value)
    {
        $this->expressionStore[$exp->getKey()] = $value;
        return $this;
    }

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


