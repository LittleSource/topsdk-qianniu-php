<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoSellercenterSubuserPermissionsRolesGetRole {

    /**
        角色id
     **/
    public $role_id;

    /**
        角色名
     **/
    public $role_name;

    /**
        角色描述
     **/
    public $description;

    /**
        所拥有权限
     **/
    public $permissions;


    public function getRoleId() : int{
        return $this->role_id;
    }

    public function setRoleId(int $roleId){
        $this->role_id = $roleId;
    }

    public function getRoleName() : string{
        return $this->role_name;
    }

    public function setRoleName(string $roleName){
        $this->role_name = $roleName;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function getPermissions() : array{
        return $this->permissions;
    }

    public function setPermissions(array $permissions){
        $this->permissions = $permissions;
    }


}

