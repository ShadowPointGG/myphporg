<?php

namespace Jjcode\Myphporg\Models\Authentication;

use ActiveRecord\Model;

class Auth_Roles extends Model{

    public int $id;
    public int $roleId;
    public string $rolename;
    public int $priority;
    public int $createdAt;
    public int $updatedAt;

    public static string $table_name = "auth_roles";

    public static function createRole(string $name, int $priority){
        $role = new Auth_Roles();
        $role->rolename = $name;
        $role->priority = $priority;

        if($role->save()){
            $role->roleId = $role->id;
            return $role->id;
        }

        return null;
    }
    public static function updateRole(int $id, string $name, int $priority){
        $role = self::find_by_id($id);
        $role->rolename = $name;
        $role->priority = $priority;

        if($role->save()){
            return $role->id;
        }

        return null;
    }

    public static function deleteRole(int $id): bool
    {
        $role = self::find($id);
        if($role->delete()){
            return true;
        }
        return false;
    }

    public static function allRoles(): array
    {
        $roles = Auth_Roles::all();
        $array = [];
        foreach($roles as $role){
            $array[] = ['roleid' => $role->roleid, 'name' => $role->roleName];
        }
        return $array;
    }

    public static function getRole(int $id){
//        die(var_dump(self::find_by_id($id)));
        return self::find_by_id($id);
    }
}