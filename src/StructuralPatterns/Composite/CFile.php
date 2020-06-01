<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Composite;

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
