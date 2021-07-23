<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\Prototype;

/**
 * Class Sheep
 * @package Patterns\CreationalPatterns\Prototype
 */
class Sheep
{
    public function __construct(
        private string $name,
        private string $category = 'Mountain Sheep'
    ){}

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getCategory(): string
    {
        return $this->category;
    }
}
