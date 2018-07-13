<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 13/07/2018
 * Time: 13:43
 */

/*
 * Когда использовать? Этот шаблон полезен для каких-то общих обработок в классе,
 * но требуемые подклассы динамически определяются в ходе выполнения (runtime).
 * То есть когда клиент не знает, какой именно подкласс может ему понадобиться.
 */

/**
 * Interface ToolInterface
 */
interface ToolInterface{
    /**
     * @return mixed
     */
    public function makeAction();
}

/**
 * Class Tool
 */
abstract class Tool implements ToolInterface {

    /**
     * @param $toolClass
     * @return mixed
     */
    public static function initial($toolClass)
    {
        return new $toolClass;
    }
}

/**
 * Class Hammer
 */
class Hammer extends Tool{

    /**
     * @return mixed|void
     */
    public function makeAction()
    {
        echo "Bam Bam Bam!!!";
    }

}

/**
 * Class Saw
 */
class Saw extends Tool{

    /**
     * @return mixed|void
     */
    public function makeAction()
    {
        echo "Vzhzhzhzh!!!";
    }

}

/** @var Hammer $hammer */
$hammer = Tool::initial(Hammer::class);
/** @var Saw $saw */
$saw = Tool::initial(Saw::class);

$hammer->makeAction();
$saw->makeAction();