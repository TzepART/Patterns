<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 16/07/2018
 * Time: 13:51
 */

namespace Patterns\StructuralPatterns\Bridge;

/*
 * Вкратце
 * Шаблон «Мост» — это предпочтение компоновки наследованию.
 * Подробности реализации передаются из одной иерархии другому объекту с отдельной иерархией. Или Шаблон «Мост» означает
 * отделение абстракции от реализации, чтобы их обе можно было изменять независимо друг от друга.
 */

//Step 1. Create example with different web-page's templates
/**
 * Interface WebPage
 * @package Patterns\StructuralPatterns\Bridge
 */
interface WebPage
{
    /**
     * WebPage constructor.
     * @param Theme $theme
     */
    public function __construct(Theme $theme);

    /**
     * @return mixed
     */
    public function getContent();
}

/**
 * Class About
 * @package Patterns\StructuralPatterns\Bridge
 */
class About implements WebPage
{
    /**
     * @var Theme
     */
    protected $theme;

    /**
     * About constructor.
     * @param Theme $theme
     */
    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    /**
     * @return mixed|string
     */
    public function getContent()
    {
        return "About page in " . $this->theme->getColor().PHP_EOL;
    }
}

/**
 * Class Careers
 * @package Patterns\StructuralPatterns\Bridge
 */
class Careers implements WebPage
{
    /**
     * @var Theme
     */
    protected $theme;

    /**
     * Careers constructor.
     * @param Theme $theme
     */
    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    /**
     * @return mixed|string
     */
    public function getContent()
    {
        return "Careers page in " . $this->theme->getColor().PHP_EOL;
    }
}

//Step 2. Separate templates hierarchy

/**
 * Interface Theme
 * @package Patterns\StructuralPatterns\Bridge
 */
interface Theme
{
    /**
     * @return mixed
     */
    public function getColor();
}

/**
 * Class DarkTheme
 * @package Patterns\StructuralPatterns\Bridge
 */
class DarkTheme implements Theme
{
    /**
     * @return mixed|string
     */
    public function getColor()
    {
        return 'Dark Black'.PHP_EOL;
    }
}

/**
 * Class LightTheme
 * @package Patterns\StructuralPatterns\Bridge
 */
class LightTheme implements Theme
{
    /**
     * @return mixed|string
     */
    public function getColor()
    {
        return 'Off white'.PHP_EOL;
    }
}

/**
 * Class AquaTheme
 * @package Patterns\StructuralPatterns\Bridge
 */
class AquaTheme implements Theme
{
    /**
     * @return mixed|string
     */
    public function getColor()
    {
        return 'Light blue'.PHP_EOL;
    }
}

//Step 3. Using
$darkTheme = new DarkTheme();
$lightTheme = new LightTheme();

$about = new About($darkTheme);
$careers = new Careers($lightTheme);

echo $about->getContent(); // "About page in Dark Black";
echo $careers->getContent(); // "Careers page in Light Black";