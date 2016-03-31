<?php
/**
 * Created by PhpStorm.
 * User: Ri
 * Date: 31.03.2016
 * Time: 19:39
 */
use \Patterns\Classes\Composite\Leaf;
use \Patterns\Classes\Composite\Composite;

$leaf = new Leaf();
$composite = new Composite();
$leaf->GetChild(2);



