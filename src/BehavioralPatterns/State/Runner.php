<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\State;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        /**
         * Example.
         * A text editor changes the state of the text that you addContent, that is, if a boldface is selected,
         * then the editor prints in bold, and so on.
         */

        $editor = new TextEditor(new DefaultCase());

        $editor->type('First line');

        $editor->setState(new UpperCase());

        $editor->type('Second line');
        $editor->type('Third line');

        $editor->setState(new LowerCase());

        $editor->type('Fourth line');
        $editor->type('Fifth line');

        /**
         * Output:
         * First line
         * SECOND LINE
         * THIRD LINE
         * fourth line
         * fifth line
         */
    }
}
