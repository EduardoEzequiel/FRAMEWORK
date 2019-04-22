<?php

namespace App\Controller;

use Core\BaseController;

class HomeController extends BaseController
{
    public function index(){
      $this->renderView('home/index');
    }
    
}
