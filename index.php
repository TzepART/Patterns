<?php

function __autoload($className) {
    if (file_exists("php-design-patterns-master/classes/".$className . "/".$className . ".php")) {
        require_once "php-design-patterns-master/classes/".$className . "/".$className . ".php";
        require_once "php-design-patterns-master/views/".$className . ".php";
        return true;
    }
    return false;
}

//__autoload("AbstractFactory");
//__autoload("Singleton");
//__autoload("Observer");
//__autoload("Adapter");
//__autoload("Composite");
__autoload("LazyInitialization");




