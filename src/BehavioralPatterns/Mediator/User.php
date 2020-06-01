<?php
declare(strict_types=1);

namespace Patterns\BehavioralPatterns\Mediator;

//Step 2. Create an "Colleague":

/**
 * Class User
 * @package Patterns\BehavioralPatterns\Mediator
 */
class User
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var ChatRoomMediatorInterface
     */
    protected $chatMediator;

    /**
     * User constructor.
     * @param string $name
     * @param ChatRoomMediatorInterface $chatMediator
     */
    public function __construct(string $name, ChatRoomMediatorInterface $chatMediator)
    {
        $this->name = $name;
        $this->chatMediator = $chatMediator;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $message
     */
    public function send($message)
    {
        $this->chatMediator->showMessage($this, $message);
    }
}
