<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Composite;

class ComponentViewer
{
    public function showChildrenTree(ParentInterface $parent, int $level = 0): void
    {
        echo str_repeat(' ', $level) . $parent->getName() . PHP_EOL;

        foreach ($parent->getChildren() as $child) {
            if ($child instanceof ParentInterface) {
                $this->showChildrenTree($child, $level + 1);
            } else {
                echo str_repeat(' ', $level + 1) . $child->getName() . PHP_EOL;
            }
        }
    }
}