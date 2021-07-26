<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Composite;

trait ChildrenTrait
{
    /**
     * @var ChildInterface[]
     */
    private array $children = [];

    public function getChildren(): array
    {
        return $this->children;
    }

    public function addChild(ChildInterface $child): self
    {
        $child->setParent(parent: $this);
        $this->children[] = $child;

        return $this;
    }
}