<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Composite;

trait ParentTrait
{
    private ?ParentInterface $parent;

    public function getParent(): ?ParentInterface
    {
        return $this->parent;
    }

    public function setParent(ParentInterface $parent): self
    {
        $this->parent = $parent;

        return $this;
    }
}