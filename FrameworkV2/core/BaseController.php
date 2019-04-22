<?php

namespace Core;

abstract class BaseController{

    protected $view;
    private $viewPath;
    private $layoutPath;

    public function __construct(){

        $this->view = new \stdClass;
    }

    protected function renderView($viewPath, $layoutPath = null){
        $this->viewPath = $viewPath;
        $this->layoutPath = $layoutPath;
        if($layoutPath){
            $this->layout();    
        }else{
            $this->content();
        }
    }


    protected function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;
    }

    protected function getPageTitle($separator = null)
    {
        if ($separator) {
            return $this->pageTitle . " " . $separator . " ";
        } else {
            return $this->pageTitle;
        }
    }
    protected function content(){


        if(file_exists(__DIR__ . "/../app/Views/{$this->viewPath}.phtml")){
            require_once __DIR__ . "/../app/Views/{$this->viewPath}.phtml";

        }else{

            $error = 400;
            $message = "Página não encontrada";
            $response = ["error" => $error, "messagem" => $message];
            echo '<pre>'; print_r($response); echo '</pre>';
        }

    }

    
    protected function layout(){

        if(file_exists(__DIR__ . "/../app/Views/{$this->$layoutPath}.phtml")){
            require_once __DIR__ . "/../app/Views/{$this->$layoutPath}.phtml";
        }else{
            $error = 400;
            $message = "Página não encontrada";
            $response = ["error" => $error, "messagem" => $message];
            echo '<pre>'; print_r($response); echo '</pre>';
        }

    }

}

