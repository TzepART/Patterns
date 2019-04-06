<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 2019-04-07
 * Time: 00:14
 */

namespace Patterns\CommonPatterns\DtoPattern\View;

use Patterns\CommonPatterns\DtoPattern\Entity\EntityInterface;

interface ViewInterface
{
    public function createView(EntityInterface $entity, int $status): string;
}