<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Visitor;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        /**
         * Example. there are several kinds of animals, and we need to listen to the sounds they make.
         */
        $monkey = new Monkey();
        $lion = new Lion();
        $dolphin = new Dolphin();

        $speak = new Speak();

        $monkey->accept($speak);  //Ooh oo aa aa!
        $lion->accept($speak);    //Roaaar!
        $dolphin->accept($speak); //Tuut tuttu tuutt!

        /**
         * We could do this simply by using the inheritance hierarchy, but then we would have to modify
         * the animals each time you added new actions to them. And here you do not need to change them.
         * For example, we can add jumping to animals by simply creating a new visitor:
         */

        $jump = new Jump();

        $monkey->accept($speak);   // Ooh oo aa aa!
        $monkey->accept($jump);    // Jumped 20 feet high! on to the tree!

        $lion->accept($speak);     // Roaaar!
        $lion->accept($jump);      // Jumped 7 feet! Back on the ground!

        $dolphin->accept($speak);  // Tuut tutt tuutt!
        $dolphin->accept($jump);   // Walked on water a little and disappeared
    }
}
