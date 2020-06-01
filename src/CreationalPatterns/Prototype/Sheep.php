<?php
declare(strict_types=1);

namespace Patterns\CreationalPatterns\Prototype;

/**
 * Class Sheep
 * @package Patterns\CreationalPatterns\Prototype
 */
class Sheep
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $category;

    /**
     * Sheep constructor.
     * @param string $name
     * @param string $category
     */
    public function __construct(string $name, string $category = 'Mountain Sheep')
    {
        $this->name = $name;
        $this->category = $category;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }
}
