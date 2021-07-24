<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Composite;

/**
 * Class File
 */
class File extends AbstractComponent implements ChildInterface
{
    use ParentTrait;

    public function __construct(string $name, ParentInterface $parent, private string $type)
    {
        $parent->addChild(child: $this);
        $this->basePath = $parent->getPath();

        parent::__construct(name: $name);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getName(): string
    {
        return $this->name . '.' . $this->getType();
    }

    public function getPath(): string
    {
        return sprintf('%s/%s.%s', $this->getBasePath(), $this->getName(), $this->getType());
    }
}
