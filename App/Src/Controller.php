<?php

namespace Jjcode\Myphporg\Src;

class Controller
{

//    public $layout = "_default";
    public $title;


    protected function renderView($view, $data = [], $layout = "_default"){
        global $config;

        extract($data);
        $view_file = VIEWS."/$view.php";
        include VIEWS."/layouts/$layout.php";


    }

    protected function redirect($url){
        header("Location: $url");
    }

    public function loginCheck(){
        if(!(isset($_SESSION['user']))){
            $this->redirect('/login');
        }
    }
}