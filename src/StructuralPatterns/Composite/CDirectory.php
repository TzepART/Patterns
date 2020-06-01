<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Composite;

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
        echo str_repeat(' ', $level) . $this->getName() . PHP_EOL;
        foreach ($this->getChilds() as $child) {
            if ($child instanceof self) {
                $child->showChildsTree($level + 1);
            } else {
                echo str_repeat(' ', $level + 1) . $child->getName() . PHP_EOL;
            }
        }
    }
}
