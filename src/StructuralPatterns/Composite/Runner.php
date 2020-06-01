<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Composite;

use Patterns\RunnerInterface;

class Runner implements RunnerInterface
{
    public static function using(): void
    {
        $root = new CDirectory('root');
        $dir1 = new CDirectory('dir1', $root);
        $dir2 = new CDirectory('dir2', $root);
        $dir3 = new CDirectory('dir3', $root);
        $dir4 = new CDirectory('dir4', $dir2);
        $file1 = new CFile('file1', 'txt', $dir1);
        $file2 = new CFile('doc', 'pdf', $dir4);

        $root->showChildsTree();
    }
}
