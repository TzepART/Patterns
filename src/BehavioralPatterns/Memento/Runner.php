<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Memento;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        /**
         * Example. The text editor keeps its state from time to time so that you can restore the text in some kind of past.
         */
        $editor = new Editor();

        // Write something
        $editor->type('This is the first sentence.' . PHP_EOL);
        $editor->type('This is second.' . PHP_EOL);

        // Save state: This is the first sentence. This is second.
        $saved = $editor->save();

        // More write...
        $editor->type('And this is third.' . PHP_EOL);

        // Output: Content before save
        echo $editor->getContent(); // This is the first sentence. This is second. And this is third.

        // Return the last saved state
        $editor->restore($saved);
        $editor->getContent(); // This is the first sentence. This is second.
    }
}
