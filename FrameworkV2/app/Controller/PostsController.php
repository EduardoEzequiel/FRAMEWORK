<?php

namespace App\Controller;
use Core\BaseController;
use App\Model\Post;
use Core\DataBase2;
use Core\Container;

class PostsController extends BaseController
{
        public function index(){

            $this->setPageTitle('Posts');
            $model = Container::getModel('Post');
            $this->view->posts = $model->All();
            $this->renderView('posts/index');
        }


        public function show($id, $request)
        {
            echo $id . '<br>';
            echo $request->get->nome . '<br>';
            echo $request->get->sexo . '<br>';
        }
    
}
