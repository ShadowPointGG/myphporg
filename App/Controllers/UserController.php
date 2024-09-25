<?php

namespace Jjcode\Myphporg\Controllers;

use Jjcode\Myphporg\Models\Authentication\Authentication;
use Jjcode\Myphporg\Models\UserModels\User;
use Jjcode\Myphporg\Src\Controller;
use Jjcode\Myphporg\Models\Authentication\Auth_Roles;

class UserController extends Controller{


    public function index(){
        $this->loginCheck();
        $pageNumber = $_GET['pg'] ?? 1;
        $limit = 10;
        $offset = ($limit * ($pageNumber - 1));
        $users = User::all()->limit($limit)->offset($offset);

        $userCount = User::all()->count();
        $pageCount = ceil($userCount / $limit);

        $this->renderView('user/index', ['users' => $users,'userCount'=>$userCount,'pageNumber'=>$pageNumber,'limit'=>$limit,'pageCount'=>$pageCount]);
    }

    public function register(){
        $user = new User();

        if(isset($_POST['user'])){
            $data = $_POST['user'];
            if($user->create($data) !== null){
                $this->redirect('/');
            }
            $this->renderView('/register');
        }
        $this->renderView('user/auth/register',[],'_auth');
    }

    public function signin(){

        if(isset($_SESSION['user'])){
            $this->redirect('/');
        }

        if(isset($_POST['user'])){
            $data = $_POST['user'];
            $user = User::find_by_email($_POST['user']['email']);
//            die(var_dump($user));
            if($user !== null){
                if(User::verifyPassword($data['password'], $user->password)){
//                    die("SUCCESS");
                    $_SESSION['user'] = $user->id;
                    $this->redirect('/');
                }else{
                    die("password incorrect");
                }
            }
            $this->redirect('/login');        }

        $this->renderView('user/auth/login',[],'_auth');
    }

    public function logout(){
        $this->loginCheck();
        unset($_SESSION['user']);
        $this->redirect('/login');
    }

    public function me(){
        global $config;
        $user = User::find_by_id($_SESSION['user']);
        $allRoles = Auth_Roles::allRoles();
        $role = Authentication::getUserRole($user->id) ?? "FUCK YOU";

        $roleSelection = [];

        foreach($allRoles as $roleOpt){
            if($roleOpt['roleid'] == $role->roleid){
                $roleSelection[] = "<option value='".$roleOpt['roleid']."' selected>".$roleOpt['name']."</option>";
            }else {
                $roleSelection[] = "<option value='" . $roleOpt['roleid'] . "'>" . $roleOpt['name'] . "</option>";
            }
        }
        if(isset($_POST['user'])){
//            die(var_dump($_POST));
            $data = $_POST['user'];

            $user->email = $data['email'];
            $user->first_name = $data['first_name'];
            $user->last_name = $data['last_name'];
            if($user->save()){

                if(Authentication::assignRole($user->id, $data['role'])){
//                    die(var_dump($auth));
                    $this->redirect('/me');
                }
                die("YOU FUCKED UP");
            }else{
                $this->redirect('/me');
            }
        }



        $this->renderView('user/me',['user'=>$user, 'role' => $role, 'roleOpt' => $roleSelection]);
    }
    public function view(){
        global $config;
        $this->loginCheck();
        if($_GET['id'] == $_SESSION['user']){
            $this->redirect('/me');
        }
        $user = User::find_by_id($_GET['id']);
        if(isset($_POST['user'])){
//            die(var_dump($_POST));
            $data = $_POST['user'];

            $user->email = $data['email'];
            $user->first_name = $data['first_name'];
            $user->last_name = $data['last_name'];
            if($user->save()){
                $this->redirect('/user/view?id='.$_GET['id']);
            }else{
                $this->redirect('/user/view?id='.$_GET['id']);
            }
        }

        $this->renderView('user/view',['user'=>$user]);
    }
}