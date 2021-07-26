<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Composite;

interface ChildInterface extends ComponentInterface
{
    public function getParent(): ?ParentInterface;
    public function setParent(ParentInterface $parent): self;
}