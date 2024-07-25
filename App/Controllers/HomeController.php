<?php

namespace Jjcode\Myphporg\Controllers;

use Jjcode\Myphporg\Src\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->title = "Home";
        $this->renderView('home/index', ['id'=>'1']);
    }
}