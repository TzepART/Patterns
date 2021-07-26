<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\Builder;

use JetBrains\PhpStorm\Pure;

/**
 * Add builder for Film
 *
 * Class FilmBuilder
 * @package Patterns\CreationalPatterns\Builder
 */
class FilmBuilder implements FilmBuilderInterface
{
    public string $director = "Unknown";
    public string $producer = "Unknown";
    public string $mainCharacter = "Unknown";
    public string $operator = "Unknown";

    public function __construct(public string $title){}

    public function addDirector(string $director): self
    {
        $this->director = $director;
        return $this;
    }

    public function addProducer(string $producer): self
    {
        $this->producer = $producer;
        return $this;
    }

    public function addMainCharacter(string $mainCharacter): self
    {
        $this->mainCharacter = $mainCharacter;
        return $this;
    }

    public function addOperator(string $operator): self
    {
        $this->operator = $operator;
        return $this;
    }

    #[Pure]
    public function build(): FilmInterface
    {
        return new Film($this);
    }
}
