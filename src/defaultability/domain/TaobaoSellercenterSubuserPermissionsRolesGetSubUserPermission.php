<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoSellercenterSubuserPermissionsRolesGetSubUserPermission {

    /**
        子账号被赋予的角色信息(Role)列表。列表中的角色对象只有role_id，role_name，permissions信息
     **/
    public $roles;

    /**
        子账号被直接赋予的权限点列表
     **/
    public $permissions;


    public function getRoles() : array{
        return $this->roles;
    }

    public function setRoles(array $roles){
        $this->roles = $roles;
    }

    public function getPermissions() : array{
        return $this->permissions;
    }

    public function setPermissions(array $permissions){
        $this->permissions = $permissions;
    }


}

