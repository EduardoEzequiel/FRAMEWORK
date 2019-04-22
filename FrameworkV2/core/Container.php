<?php

namespace Core;

class Container
{
    public static function newController($contoller)
    {
        $objContoller = "App\\Controller\\" . $contoller;
        return new $objContoller;
    }

    public static function getModel($model)
    {
        $objModel = "\\App\\Model\\" . $model;
        return new $objModel(DataBase2::getDataBase());
    }

    public static function pageNotFound()
    {
        if(file_exists(__DIR__ . "/../app/Views/404.phtml")){
            return require_once __DIR__ . "/../app/Views/404.phtml";
        }else{
            echo "Erro 404: Page not found!";
        }
    }

}