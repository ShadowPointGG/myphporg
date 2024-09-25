<?php

namespace Jjcode\Myphporg\Models\Authentication;

use ActiveRecord\Model;
use Jjcode\Myphporg\Models\Authentication\Auth_Roles;

class Authentication extends Model {

    public int $roleId;
    public int $userId;

    private static string $table = "auth_assignments";

    public static function getUserRole($user_id) {
        $assignedRole = self::find_by_userid($user_id);
//die(var_dump($assignedRole->roleid));
        return Auth_Roles::getRole($assignedRole->roleid);
    }

    public static function assignRole(int $user_id, int $role_id) {
        $assignee = self::find_by_userid($user_id);

        if($assignee){
            $assignee->roleId = $role_id;
            if($assignee->save()){
                return true;
            }else{
                die("YOU FUCKED UP ON AUTH");
            }
        }else{
            $assignee = new Authentication();
            $assignee->userId = $user_id;
            $assignee->roleId = $role_id;
            if($assignee->save()){
                return true;
            }
            return false;
        }
    }
}