<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Bridge;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        /**
         * Example with different web-page's templates
         */
        $darkTheme = new DarkTheme();
        $aquaTheme = new AquaTheme();

        $about = new About(theme: $darkTheme);
        $careers = new Careers(theme: $aquaTheme);

        echo $about->getContent(); // 'About page in Dark Black';
        echo $careers->getContent(); // 'Careers page in Light blue';
    }
}
