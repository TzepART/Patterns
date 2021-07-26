<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Composite;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        $root = new Directory(name: 'root');
        $dir1 = new Directory(name: 'dir1', parent: $root);
        $dir2 = new Directory(name: 'dir2', parent: $root);
        $dir3 = new Directory(name: 'dir3', parent: $root);
        $dir4 = new Directory(name: 'dir4', parent: $dir2);
        $file1 = new File(name: 'file1', parent: $dir1, type: 'txt');
        $file2 = new File(name: 'doc', parent: $dir4, type: 'pdf');

        (new ComponentViewer())->showChildrenTree(parent: $root);
    }
}
