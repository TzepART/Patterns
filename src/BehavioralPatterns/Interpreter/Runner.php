<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Interpreter;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    /**
     * Example. The task of searching for lines by pattern can be solved by
     * creating an interpreter that defines the grammar of the language.
     */
    public static function using(): void
    {
        $context = new InterpreterContext();
        $input = new VariableExpression(name: 'input');
        $statement = new BooleanOrOperatorExpression(
            leftOperand: new EqualsOperatorExpression(leftOperand: $input, rightOperand: new LiteralExpression('four')),
            rightOperand: new EqualsOperatorExpression(leftOperand: $input, rightOperand: new LiteralExpression('4'))
        );

        // Value - four
        // Result: Match
        // Value - 4
        // Result: Match
        // Value - 52
        // Result: No match
        foreach (['four', '4', '52'] as $value) {
            $input->setValue($value);
            $statement->interpret(context: $context);

            echo sprintf('Value - %s', $value) . PHP_EOL;
            echo sprintf('Result: %s', $context->lookup(exp: $statement) ? 'Match' : 'No match').PHP_EOL;
        }
    }
}
