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
$leaf1 = new Leaf();
$leaf2 = new Leaf();
$composite = new Composite();
$composite->Add($leaf);
$composite->Add($leaf1);
$composite->Add($leaf2);
$composite->GetChildren();
$composite->Operation();



