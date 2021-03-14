<?php
declare(strict_types=1);


namespace Patterns\CreationalPatterns\Builder;


interface FilmInterface
{
    public function getTitle(): string;

    public function getDirector(): string;

    public function getProducer(): string;

    public function getMainCharacter(): string;

    public function getOperator(): string;
}
