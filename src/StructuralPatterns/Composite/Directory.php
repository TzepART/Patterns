<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Composite;

/**
 * Class Directory
 */
class Directory extends AbstractComponent implements ParentInterface, ChildInterface
{
    use ChildrenTrait, ParentTrait;

    public function __construct(string $name, ?ParentInterface $parent = null)
    {
        if($parent instanceof ParentInterface){
            $parent->addChild(child: $this);
            $this->basePath = $parent->getPath();
        }

        parent::__construct(name: $name);
    }

    public function getPath(): string
    {
        return sprintf('%s/%s', $this->getBasePath(), $this->getName());
    }

    public function getName(): string
    {
        return $this->name;
    }
}
