<?php

namespace Jjcode\Myphporg\Src;

class Controller
{

    public $layout = "_default";
    public $title;
//    protected function render($view, $data = [])
//    {
//        extract($data);
//        include "Views/$view.php";
//    }

    protected function renderView($view, $data = [], $layout = "_default"){
        global $config;

        extract($data);
        $view_file = VIEWS."/$view.php";
        include VIEWS."/layouts/$layout.php";


    }
}