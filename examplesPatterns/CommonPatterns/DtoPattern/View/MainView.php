<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 2019-04-07
 * Time: 00:15
 */

namespace Patterns\CommonPatterns\DtoPattern\View;

use Patterns\CommonPatterns\DtoPattern\Entity\EntityInterface;

class MainView implements ViewInterface
{
    public function createView(EntityInterface $entity, int $status): string
    {
        // TODO: Implement createView() method.
    }
}