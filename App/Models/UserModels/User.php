<?php

namespace Jjcode\Myphporg\Models\UserModels;

use ActiveRecord\Model;

class User extends Model {
    public static string $table = "users";
    /**
     * @var \ActiveRecord\Model|\ActiveRecord\Model[]|array|mixed|null
     */
    private int $id;
    private string $first_name;
    private string $last_name;
    private string $email;
    private string $confirm_email;
    private string $password;
    private int $created_at;
    private int $updated_at;

    public function attributes(): array
    {
        return [
            'id',
            'first_name',
            'last_name',
            'email',
            'password'
        ];
    }

    static array $validates_uniqueness_of = [
        'email' => [
            'message' => 'This email is already in use. Try again or Log in!',
            'on' => ['create','update']
        ]
    ];
    protected static function hashPassword($password)
    {
        //change this if you wish to use another hashing algorithm
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public static function verifyPassword($password, $hash)
    {
        return password_verify($password, $hash);
    }

    public function set_password($password){
        $this->assign_attribute('password',self::hashPassword($password));
    }

    public static function findUserByEmail($email){
        return User::where('email', '=', $email)->first();
    }

    public static function findUserById($id){
        return User::where('id', '=', $id)->first();
    }

    public static function login($email, $password){
        $user = User::where('email', '=', $email)->first();
        if(!$user){
            return null;
        }
        if(self::verifyPassword($password, $user->password)){
            $_SESSION['user'] = $user->id;
            return $user;
        }else{
            return null;
        }
    }



}