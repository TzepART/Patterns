<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\CompositeV2;

interface LeafInterface
{
    public function getPath(): string;
    public function getParentLeaf():? CompositeInterface;
    public function setParent(CompositeInterface $parent);
}
