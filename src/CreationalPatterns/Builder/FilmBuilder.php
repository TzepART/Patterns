<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\Builder;

/**
 * Add builder for Film
 *
 * Class FilmBuilder
 * @package Patterns\CreationalPatterns\Builder
 */
class FilmBuilder
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $director = "Unknown";

    /**
     * @var string
     */
    public $producer = "Unknown";

    /**
     * @var string
     */
    public $mainCharacter = "Unknown";

    /**
     * @var string
     */
    public $operator = "Unknown";

    /**
     * FilmBuilder constructor.
     * @param $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }


    /**
     * @param string $director
     * @return $this
     */
    public function addDirector(string $director)
    {
        $this->director = $director;
        return $this;
    }

    /**
     * @param string $producer
     * @return $this
     */
    public function addProducer(string $producer)
    {
        $this->producer = $producer;
        return $this;
    }

    /**
     * @param string $mainCharacter
     * @return $this
     */
    public function addMainCharacter(string $mainCharacter)
    {
        $this->mainCharacter = $mainCharacter;
        return $this;
    }

    /**
     * @param string $operator
     * @return $this
     */
    public function addOperator(string $operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * @return FilmInterface
     */
    public function build(): FilmInterface
    {
        return new Film($this);
    }
}
