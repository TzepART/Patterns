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
    }
}
