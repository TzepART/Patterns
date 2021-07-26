<?php


namespace Patterns\StructuralPatterns\Composite;

interface ParentInterface extends ComponentInterface
{
    public function getChildren(): array;
    public function addChild(ChildInterface $child): self;
}