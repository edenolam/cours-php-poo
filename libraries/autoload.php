<?php

function autoloadJb($className){
    $className = str_replace("\\", "/", $className);
    require_once "libraries/{$className}.php";
}

spl_autoload_register("autoloadJb");
