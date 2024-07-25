<?php

namespace Jjcode\Myphporg\Controllers;

use Jjcode\Myphporg\Src\Controller;

class ErrorController extends Controller
{
    public function error404()
    {
        $this->title = "404";
        $this->renderView('error/404',[],'_error');
    }
}