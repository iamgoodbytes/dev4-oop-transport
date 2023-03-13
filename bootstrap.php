<?php
    spl_autoload_register(function($class){
        require_once(__DIR__ . DIRECTORY_SEPARATOR . "classes" . DIRECTORY_SEPARATOR . $class . ".php");
    });

    // interfaces
    require_once("interfaces/Vehicle.php");

    // traits
    require_once("traits/Json.php");
?>