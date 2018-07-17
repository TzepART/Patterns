<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 16/07/2018
 * Time: 23:15
 */

namespace Patterns\StructuralPatterns\Composite;

/*
 * Вкратце
 * Шаблон «Компоновщик» позволяет клиентам обрабатывать отдельные объекты в едином порядке.
 * Компоновщик (англ. Composite pattern) — структурный шаблон проектирования, объединяющий объекты в древовидную
 * структуру для представления иерархии от частного к целому. Компоновщик позволяет клиентам обращаться
 * к отдельным объектам и к группам объектов одинаково.
 *
 * Цель
 * Паттерн определяет иерархию классов, которые одновременно могут состоять из примитивных и
 * сложных объектов, упрощает архитектуру клиента, делает процесс добавления новых видов объекта более простым.
 *
 */

//Example.

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

/**
 * Class CFile
 */
class CFile extends Component
{
    /**
     * @var
     */
    private $type;

    /**
     * CFile constructor.
     * @param $name
     * @param $type
     * @param CDirectory|null $parent
     */
    public function __construct($name, $type, CDirectory $parent = null)
    {
        $this->type = $type;

        // Retrieve constructor of Component
        parent::__construct($name, $parent);
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return parent::getName() . '.' . $this->getType();
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return parent::getPath() . '.' . $this->getType();
    }
}

/**
 * Class CDirectory
 */
class CDirectory extends Component
{

    /**
     * @var array
     */
    private $childs;

    /**
     * CDirectory constructor.
     * @param $name
     * @param CDirectory|null $parent
     */
    public function __construct($name, CDirectory $parent = null)
    {
        $this->childs = array();

        // Retrieve constructor of Component
        parent::__construct($name, $parent);
    }

    /**
     * @return array
     */
    public function getChilds()
    {
        return $this->childs;
    }


    /**
     * @param $childs
     */
    public function setChilds($childs)
    {
        $this->childs = $childs;
    }


    /**
     * @param Component $child
     */
    public function addChild(Component $child)
    {
        $child->setParent($this);
        $this->childs[] = $child;
    }

    /**
     * @param int $level
     */
    public function showChildsTree($level = 0)
    {
        echo str_repeat(' ', $level) . $this->getName().PHP_EOL;
        foreach ($this->getChilds() as $child) {
            if ($child instanceof self) {
                $child->showChildsTree($level + 1);
            } else {
                echo str_repeat(' ', $level + 1) . $child->getName().PHP_EOL;
            }
        }
    }
}

$root = new CDirectory('root');
$dir1 = new CDirectory('dir1', $root);
$dir2 = new CDirectory('dir2', $root);
$dir3 = new CDirectory('dir3', $root);
$dir4 = new CDirectory('dir4', $dir2);
$file1 = new CFile('file1', 'txt', $dir1);
$file2 = new CFile('doc', 'pdf', $dir4);

$root->showChildsTree();