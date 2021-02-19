<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Composite;

/**
 * Class Component
 */
class Component
{
    /**
     * @var string
     */
    private $basePath;
    /**
     * @var
     */
    private $name;
    /**
     * @var CDirectory
     */
    private $parent;

    /**
     * Component constructor.
     * @param $name
     * @param CDirectory|null $parent
     */
    public function __construct($name, CDirectory $parent = null)
    {
        $this->name = $name;
        $this->parent = $parent;
        if ($this->parent != null) {
            $this->parent->addChild($this);
            $this->basePath = $this->parent->getPath();
        } else {
            $this->basePath = '';
        }
    }

    /**
     * @return string
     */
    public function getBasePath()
    {
        return $this->basePath;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return CDirectory|null
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param $basePath
     */
    public function setBasePath($basePath)
    {
        $this->basePath = $basePath;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param CDirectory $parent
     */
    public function setParent(CDirectory $parent)
    {
        $this->parent = $parent;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->getBasePath() . '/' . $this->getName();
    }
}
