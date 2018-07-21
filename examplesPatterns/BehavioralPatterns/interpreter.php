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

//Example

//Step 1.
abstract class Expression {

    private static $_count = 0;
    private $_key = null;

    public abstract function interpret( InterpreterContext $context );

    public function getKey()  {
        if( !isset( $this->_key ) ) {
            self::$_count++;
            $this->_key = self::$_count;
        }
        return $this->_key;
    }

}

//Step 2.
class LiteralExpression extends Expression  {

    private $_value = null;

    public function __construct( $value ) {
        $this->_value = $value;
    }

    public function interpret( InterpreterContext $context ) {
        $context->replace( $this, $this->_value );
    }

}

class VariableExpression extends Expression {

    private $_name = null;
    private $_val = null;

    public function __construct( $name, $val = null ) {
        $this->_name = $name;
        $this->_val = $val;
    }

    public function interpret( InterpreterContext $context ) {
        if( !is_null( $this->_val ) )
            $context->replace( $this, $this->_val );
    }

    public function setValue( $value )  {
        $this->_val = $value;
    }

    public function getKey()  {
        return $this->_name;
    }

}

//Step 3.
abstract class OperatorExpression extends Expression {

    protected $leftoperand = null;
    protected $rightoperand = null;

    public function __construct( Expression $leftoperand, Expression $rightoperand )  {
        $this->leftoperand = $leftoperand;
        $this->rightoperand = $rightoperand;
    }

    public function interpret( InterpreterContext $context ) {
        $this->leftoperand->interpret( $context );
        $this->rightoperand->interpret( $context );
        $resultleft = $context->lookup( $this->leftoperand );
        $resultright = $context->lookup( $this->rightoperand );
        $this->doInterpret( $context, $resultleft, $resultright );
    }

    protected abstract function doInterpret( InterpreterContext $context, $resultleft, $resultright );

}

//Step 4.
class EqualsExpression extends OperatorExpression {

    protected function doInterpret( InterpreterContext $context, $resultleft, $resultright )  {
        $context->replace( $this, $resultleft == $resultright );
    }

}

class BooleanOrExpression extends OperatorExpression {

    protected function doInterpret( InterpreterContext $context, $resultleft, $resultright )  {
        $context->replace( $this, $resultleft || $resultright );
    }

}

class BooleanAndExpression extends OperatorExpression {

    protected function doInterpret( InterpreterContext $context, $resultleft, $resultright )  {
        $context->replace( $this, $resultleft && $resultright );
    }

}

//Step 5.
class InterpreterContext {

    private $_expressionstore = [];

    public function replace( Expression $exp, $value ) {
        $this->_expressionstore[$exp->getKey()] = $value;
    }

    public function lookup( Expression $exp )  {
        return $this->_expressionstore[$exp->getKey()];
    }

}

//Using
$context = new InterpreterContext();
$input = new VariableExpression( 'input' );
$statement = new BooleanOrExpression(
    new EqualsExpression( $input, new LiteralExpression( "four" ) ),
    new EqualsExpression( $input, new LiteralExpression( "4" ) )
);

foreach( ["four", "4", "52" ] as $value ) {
    $input->setValue( $value );
    echo $value.PHP_EOL;
    $statement->interpret( $context );
    echo $context->lookup( $statement )
        ? "Match"
        : "No match";
}


