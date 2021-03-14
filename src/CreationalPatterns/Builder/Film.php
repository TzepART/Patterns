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

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $director;

    /**
     * @var string
     */
    private $producer;

    /**
     * @var string
     */
    private $mainCharacter;

    /**
     * @var string
     */
    private $operator;

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

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDirector(): string
    {
        return $this->director;
    }

    /**
     * @return string
     */
    public function getProducer(): string
    {
        return $this->producer;
    }

    /**
     * @return string
     */
    public function getMainCharacter(): string
    {
        return $this->mainCharacter;
    }

    /**
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }
}
