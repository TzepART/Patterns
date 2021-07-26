<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Memento;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        /**
         * Example. The text editor keeps its state from time to time so that you can rollback the text in some kind of past.
         */
        $editor = new Editor();

        // Write something
        $editor->addContent('This is the first sentence.' . PHP_EOL);
        $editor->addContent('This is second.' . PHP_EOL);

        // Save state: This is the first sentence. This is second.
        $saved = $editor->save();

        // More write...
        $editor->addContent('And this is third.' . PHP_EOL);

        // Output: Content before save
        echo $editor->getContent(); // This is the first sentence. This is second. And this is third.

        // Return the last saved state
        $editor->rollback(memento: $saved);
        echo $editor->getContent(); // This is the first sentence. This is second.
    }
}
