<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\Builder;

/**
 * Add class Film, that use builder
 *
 * Class Film
 */
class Film implements FilmInterface
{
    private string $title;
    private string $director;
    private string $producer;
    private string $mainCharacter;
    private string $operator;

    /**
     * Film constructor.
     * @param FilmBuilder $filmBuilder
     */
    public function __construct(FilmBuilder $filmBuilder)
    {
        $this->title = $filmBuilder->title;
        $this->director = $filmBuilder->director;
        $this->producer = $filmBuilder->producer;
        $this->mainCharacter = $filmBuilder->mainCharacter;
        $this->operator = $filmBuilder->operator;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDirector(): string
    {
        return $this->director;
    }

    public function getProducer(): string
    {
        return $this->producer;
    }

    public function getMainCharacter(): string
    {
        return $this->mainCharacter;
    }

    public function getOperator(): string
    {
        return $this->operator;
    }
}
