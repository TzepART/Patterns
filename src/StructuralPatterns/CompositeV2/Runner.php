<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\CompositeV2;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        $root = new ParentLeaf(path: 'root');

        $leaf1 = new ChildLeaf(path: 'root/path1/leaf1.txt');
        $leaf2 = new ChildLeaf(path: 'root/path1/leaf2.txt');
        $leaf3 = new ChildLeaf(path: 'root/path2/leaf1.txt');
        $leaf4 = new ChildLeaf(path: 'root/path2/leaf2.txt');

        $parent1 = new ParentLeaf(path: 'root/path1');
        $parent1->addLeaf($leaf1)
            ->addLeaf($leaf2);

        $parent2 = new ParentLeaf(path: 'root/path2');
        $parent2->addLeaf($leaf3)
            ->addLeaf($leaf4);

        $root->addLeaf($parent1)
            ->addLeaf($parent2);

        self::printPaths(root: $root);
    }

    /**
     * @param CompositeInterface $root
     */
    protected static function printPaths(CompositeInterface $root): void
    {
        echo $root->getPath() . PHP_EOL;

        foreach ($root->getChildren() as $child) {
            if ($child instanceof CompositeInterface) {
                self::printPaths(root: $child);
            } else {
                echo $child->getPath() . PHP_EOL;
            }
        }
    }
}
