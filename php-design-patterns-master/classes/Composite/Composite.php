<?php
/**
 * Created by PhpStorm.
 * User: Ri
 * Date: 31.03.2016
 * Time: 19:39
 */
namespace Patterns\Classes\Composite;

class ComponentException extends \Exception
{
}

;

abstract class Component
{
    protected $_children = array();

    abstract public function Add(Component $Component);

    abstract public function Remove($index);

    abstract public function GetChild($index);

    abstract public function GetChildren();

    abstract public function Operation();
}

class Composite extends Component
{
    public function Add(Component $Component)
    {
        $this->_children[] = $Component;
    }

    public function GetChild($index)
    {
        if (!isset($this->_children[$index])) {
            throw new ComponentException("Child not exists");
        }

        return $this->_children[$index];
    }

    public function Operation()
    {
        print "I am composite. I have " . count($this->GetChildren()) . " children\n";

        foreach ($this->GetChildren() as $Child) {
            $Child->Operation();
        }
    }

    public function Remove($index)
    {
        if (!isset($this->_children[$index])) {
            throw new ComponentException("Child not exists");
        }

        unset($this->_children[$index]);
    }

    public function GetChildren()
    {
        return $this->_children;
    }
}

class Leaf extends Component
{
    public function Add(Component $Component)
    {
        throw new ComponentException("I can't append child to myself");
    }

    public function GetChild($index)
    {
        try {
            throw new ComponentException("Child not exists");
        } catch (\Exception $e) {
            echo $e->getMessage()."\n";
        }
    }

    public function Operation()
    {
        print "I am leaf\n";
    }

    public function Remove($index)
    {
        throw new ComponentException("Child not exists");
    }

    public function GetChildren()
    {
        return array();
    }
}