<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Flyweight;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        $teaMaker = new TeaMaker();
        $shop = new TeaShop($teaMaker);

        $shop->takeOrder('less sugar', 1);
        $shop->takeOrder('more milk', 2);
        $shop->takeOrder('more milk', 3);
        $shop->takeOrder('without sugar', 5);

        $shop->serve();
        //  Output:
        //  Serving tea to table #1. Using tea - 1
        //  Serving tea to table #2. Using tea - 2
        //  Serving tea to table #3. Using tea - 2
        //  Serving tea to table #5. Using tea - 1

    }
}
