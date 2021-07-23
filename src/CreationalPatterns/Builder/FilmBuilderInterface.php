<?php

declare(strict_types=1);

namespace Patterns\CreationalPatterns\Builder;

interface FilmBuilderInterface
{
    public function build(): FilmInterface;
}