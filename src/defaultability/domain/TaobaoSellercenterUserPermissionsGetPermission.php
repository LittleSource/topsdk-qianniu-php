<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoSellercenterUserPermissionsGetPermission {

    /**
        注册到权限中心的code值
     **/
    public $permission_code;

    /**
        权限名称
     **/
    public $permission_name;

    /**
        父权限code
     **/
    public $parent_code;

    /**
        1 :允许授权  2：不允许授权 6：不允许授权但默认已有权限
     **/
    public $is_authorize;


    public function getPermissionCode() : string{
        return $this->permission_code;
    }

    public function setPermissionCode(string $permissionCode){
        $this->permission_code = $permissionCode;
    }

    public function getPermissionName() : string{
        return $this->permission_name;
    }

    public function setPermissionName(string $permissionName){
        $this->permission_name = $permissionName;
    }

    public function getParentCode() : string{
        return $this->parent_code;
    }

    public function setParentCode(string $parentCode){
        $this->parent_code = $parentCode;
    }

    public function getIsAuthorize() : int{
        return $this->is_authorize;
    }

    public function setIsAuthorize(int $isAuthorize){
        $this->is_authorize = $isAuthorize;
    }


}

