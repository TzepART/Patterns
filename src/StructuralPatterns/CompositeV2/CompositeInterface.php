<?php
declare(strict_types=1);


namespace Patterns\StructuralPatterns\CompositeV2;


interface CompositeInterface
{
    public function addLeaf(LeafInterface $leaf);

    /**
     * @return CompositeInterface[]|LeafInterface[]|array
     */
    public function getChildren(): array;
}
