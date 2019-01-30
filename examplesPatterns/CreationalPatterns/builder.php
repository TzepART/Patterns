<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 15/07/2018
 * Time: 02:13
 */

namespace Patterns\CreationalPatterns\Builder;

/*
 * Вкратце
 * Шаблон позволяет создавать разные свойства объекта, избегая загрязнения конструктора (constructor pollution).
 * Это полезно, когда у объекта может быть несколько свойств. Или когда создание объекта состоит из большого количества этапов.
 * Шаблон «Строитель» предназначен для поиска решения проблемы антипаттерна Telescoping constructor.
 *
 * Когда использовать?
 * Когда у объекта может быть несколько свойств и когда нужно избежать Telescoping constructor.
 * Ключевое отличие от шаблона «Простая фабрика»: он используется в одноэтапном создании, а «Строитель» — в многоэтапном.
 */

// Add builder for Film
/**
 * Class FilmBuilder
 * @package Patterns\CreationalPatterns\Builder
 */
class FilmBuilder
{

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $director = "Unknown";

    /**
     * @var string
     */
    public $producer = "Unknown";

    /**
     * @var string
     */
    public $mainCharacter = "Unknown";

    /**
     * @var string
     */
    public $operator = "Unknown";

    /**
     * FilmBuilder constructor.
     * @param $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }


    /**
     * @param string $director
     * @return $this
     */
    public function addDirector(string $director)
    {
        $this->director = $director;
        return $this;
    }

    /**
     * @param string $producer
     * @return $this
     */
    public function addProducer(string $producer)
    {
        $this->producer = $producer;
        return $this;
    }

    /**
     * @param string $mainCharacter
     * @return $this
     */
    public function addMainCharacter(string $mainCharacter)
    {
        $this->mainCharacter = $mainCharacter;
        return $this;
    }

    /**
     * @param string $operator
     * @return $this
     */
    public function addOperator(string $operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * @return Film
     */
    public function build(): Film
    {
        return new Film($this);
    }

}

//Add class Film, that use builder
/**
 * Class Film
 */
class Film
{

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $director;

    /**
     * @var string
     */
    private $producer;

    /**
     * @var string
     */
    private $mainCharacter;

    /**
     * @var string
     */
    private $operator;

    /**
     * Film constructor.
     * @param FilmBuilder $filmBuilder
     */
    public function __construct(FilmBuilder $filmBuilder)
    {
        $this->title = $filmBuilder->title;
        $this->director = $filmBuilder->director;
        $this->producer = $filmBuilder->producer;
        $this->mainCharacter = $filmBuilder->mainCharacter;
        $this->operator = $filmBuilder->operator;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDirector(): string
    {
        return $this->director;
    }

    /**
     * @return string
     */
    public function getProducer(): string
    {
        return $this->producer;
    }

    /**
     * @return string
     */
    public function getMainCharacter(): string
    {
        return $this->mainCharacter;
    }

    /**
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

}

//Using
$film = (new FilmBuilder("Hello, Mars!"))
    ->addDirector("Spilberg")
    ->addMainCharacter("Crow")
    ->build();

echo "This is new film!".PHP_EOL;
echo sprintf("Film's name is %s, director is %s, main character is %s, producer is %s, operator is %s".PHP_EOL,
    $film->getTitle(),
    $film->getDirector(),
    $film->getMainCharacter(),
    $film->getProducer(),
    $film->getOperator()
);
