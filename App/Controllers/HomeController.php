<?php

namespace Jjcode\Myphporg\Controllers;

use Jjcode\Myphporg\Models\UserModels\User;
use Jjcode\Myphporg\Src\Controller;

class HomeController extends Controller
{
    public function index()
    {

        $user = User::find_by_id($_SESSION['user']);
        $this->title = "Home";
        $this->renderView('home/index', ['user'=>$user]);
    }
}