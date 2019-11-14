<?php


class Application
{
    public static function process ()
    {
        $controllerName = "Article";
        $task = "index";
        if (!empty($_GET['controller'])){
            $controllerName = ucfirst($_GET['controller']);
        }
        if (!empty($_GET['task'])){
            $controllerName = $_GET['task'];
        }
        $controllerName = "\Controller\\" . $controllerName;
        $controller = new $controllerName();
        $controller->$task();
    }
}
