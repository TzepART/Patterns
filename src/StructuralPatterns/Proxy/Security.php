<?php
declare(strict_types=1);

namespace Patterns\StructuralPatterns\Proxy;

/**
 * Make a "proxy", so that the door can perform a protective function:
 *
 * Class Security
 * @package Patterns\StructuralPatterns\Proxy
 */
class Security
{
    /**
     * @var DoorInterface
     */
    protected $door;

    /**
     * Security constructor.
     * @param DoorInterface $door
     */
    public function __construct(DoorInterface $door)
    {
        $this->door = $door;
    }

    /**
     * @param $password
     */
    public function open($password)
    {
        if ($this->authenticate($password)) {
            $this->door->open();
        } else {
            echo "Big no! It isn't possible." . PHP_EOL;
        }
    }

    /**
     * @param $password
     * @return bool
     */
    public function authenticate($password)
    {
        return $password === '$ecr@t';
    }


    public function close()
    {
        $this->door->close();
    }
}
