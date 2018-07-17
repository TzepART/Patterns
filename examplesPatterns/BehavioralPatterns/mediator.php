<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 18/07/2018
 * Time: 01:50
 */

namespace Patterns\BehavioralPatterns\Mediator;

/*
 * Вкратце
 * Шаблон «Посредник» подразумевает добавление стороннего объекта («посредника») для управления
 * взаимодействием между двумя объектами («коллегами»). Шаблон помогает уменьшить связанность (coupling) классов,
 * общающихся друг с другом, ведь теперь они не должны знать о реализациях своих собеседников.
 * Или
 * Шаблон определяет объект, который инкапсулирует способ взаимодействия набора объектов.
 */

//Example
//The simplest example: chat ("Mediator"), in which users ("colleagues") send messages to each other.
//Step 1. Create an "Mediator":
/**
 * Interface ChatRoomMediator
 * @package Patterns\BehavioralPatterns\Mediator
 */
interface ChatRoomMediator
{
    /**
     * @param User $user
     * @param string $message
     * @return mixed
     */
    public function showMessage(User $user, string $message);
}

/**
 * Class ChatRoom
 * @package Patterns\BehavioralPatterns\Mediator
 */
class ChatRoom implements ChatRoomMediator
{
    /**
     * @param User $user
     * @param string $message
     * @return mixed|void
     */
    public function showMessage(User $user, string $message)
    {
        $time = date('M d, y H:i');
        $sender = $user->getName();

        echo $time . '[' . $sender . ']:' . $message.PHP_EOL;
    }
}

//Step 2. Create an "Colleague":

/**
 * Class User
 * @package Patterns\BehavioralPatterns\Mediator
 */
class User {

    /**
     * @var string
     */
    protected $name;

    /**
     * @var ChatRoomMediator
     */
    protected $chatMediator;

    /**
     * User constructor.
     * @param string $name
     * @param ChatRoomMediator $chatMediator
     */
    public function __construct(string $name, ChatRoomMediator $chatMediator) {
        $this->name = $name;
        $this->chatMediator = $chatMediator;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param $message
     */
    public function send($message) {
        $this->chatMediator->showMessage($this, $message);
    }
}

//Using
$mediator = new ChatRoom();

$john = new User('John Doe', $mediator);
$jane = new User('Jane Doe', $mediator);

$john->send('Hi there!');
$jane->send('Hey!');

// Выходной вид
// Feb 14, 10:58 [John]: Hi there!
// Feb 14, 10:58 [Jane]: Hey!