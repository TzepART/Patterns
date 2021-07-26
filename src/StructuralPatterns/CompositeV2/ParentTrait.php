<?php

declare(strict_types=1);

namespace Patterns\StructuralPatterns\CompositeV2;

trait ParentTrait
{
    private CompositeInterface $parent;

    public function getParentLeaf(): CompositeInterface
    {
        return $this->parent;
    }

    public function setParent(CompositeInterface $parent): self
    {
        $this->parent = $parent;

        return $this;
    }
}