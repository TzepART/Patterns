<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\Builder;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        $film = (new FilmBuilder('Hello, Mars!'))
            ->addDirector('Spilberg')
            ->addMainCharacter('Crow')
            ->build();

        echo 'This is new film!' . PHP_EOL;
        echo sprintf(
            'Film\'s name is %s, director is %s, main character is %s, producer is %s, operator is %s' . PHP_EOL,
            $film->getTitle(),
            $film->getDirector(),
            $film->getMainCharacter(),
            $film->getProducer(),
            $film->getOperator()
        );
    }
}
