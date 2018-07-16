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

//Create example with different web-page's templates
interface WebPage
{
    public function __construct(Theme $theme);
    public function getContent();
}

class About implements WebPage
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return "About page in " . $this->theme->getColor();
    }
}

class Careers implements WebPage
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return "Careers page in " . $this->theme->getColor();
    }
}

//Separate templates hierarchy
interface Theme
{
    public function getColor();
}

class DarkTheme implements Theme
{
    public function getColor()
    {
        return 'Dark Black';
    }
}
class LightTheme implements Theme
{
    public function getColor()
    {
        return 'Off white';
    }
}
class AquaTheme implements Theme
{
    public function getColor()
    {
        return 'Light blue';
    }
}

//Using
$darkTheme = new DarkTheme();
$lightTheme = new LightTheme();

$about = new About($darkTheme);
$careers = new Careers($lightTheme);

echo $about->getContent(); // "About page in Dark Black";
echo $careers->getContent(); // "Careers page in Light Black";